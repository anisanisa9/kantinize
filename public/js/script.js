$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    let currentOrder = []
    let totalprice = 0

    $("div .item-cashier").on('click', function () {
        let id = $(this).data('id');
        let foodname = $(this).data('name');
        let price = $(this).data('price');
        let image = $(this).data('image');
        console.log("adding to order")
        for (let i = 0; i < currentOrder.length; i++) {
            if (currentOrder[i]["id"] == id) {
                currentOrder[i]["qty"] += 1
                totalprice += price
                loopOrder();
                return
            }
        }
        addToCurrentOrder(foodname, id, price, image)
    })

    function loopOrder() {
        $('#current-order').html('')
        for (let i = 0; i < currentOrder.length; i++) {
            let component = `
            <div class="row px-2 current-order mb-2">
            <img style="border-radius: 15px !important; width: 60px !important;" class="rounded col-2 p-0" src="gambar/${currentOrder[i]['image']}" alt="...">
            <p class="col-3 mb-0 text-wrap font-weight-bold text-dark">${currentOrder[i]['foodname']}</p>
            <div class="input-group col-4 ">
                <span id="quanty" name="quant[2]" class="cart-price ml-2"> x${currentOrder[i]['qty']}</span>
            </div>
            <p class="col-3">Rp ${currentOrder[i]['price'] * currentOrder[i]['qty']}</p>
            </div>
            `
            $('#current-order').append(component)

            
        }
    }

    $('#uang').keypress(function () {
        if (event.keyCode == 13) {
            let kembalian = $('#uang').val() - totall
            $("#kembalian").text('Rp.'+ kembalian)
            $('#uang').val(0)
        }
    })
    
    function addToCurrentOrder(foodname, id, price, image) {
        totalprice += price
        currentOrder.push({
            'id': id,
            'qty': 1,
            'foodname': foodname,
            'image': image,
            'price': price
        })
        loopOrder();
    }

    $("#pay").on('click', function () {
        $.ajax({
            type: "POST",
            data: {
                order: currentOrder,
                totalprice: totalprice
            },
            url: "order",
            success: function (msg) {
                console.log(msg)
                alert('berhasil')
            },
            error: function (msg) {
                console.log(msg)
                alert("There was an error. Try again please!");
            }
        });
    })

});