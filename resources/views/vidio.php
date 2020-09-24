<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Multimedia</title>
</head>

<style>
    body{
        background-color: black;
    }
    .container{
        background-color: #f2f2f2;
        height:Auto;
    }
    .header{
        text-align:center;
    }
    .poto{
        width:100px;
        height:100px;
    }
    .des{
        margin-top:380px;
        text-align:center;
    }
    .jns{
        align:center;
        text-align:center;
    }
    .resep2{
        margin-left:4.5%;
    }
    .audio{
        align:center;
        text-align:center;
    }
    .playlist{
        margin-left:10%;
        margin-right:10%;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <font face="Thoma" size="30">Resep Indonesia</font>
        </div>
        
        <br>
        
        <div class="poto">
            <img src="poto.jpg" alt="" width="1111px" height="460px">
        </div>

        <div class="des">
            <font face="Thoma" size="20">Masakan Nusantara</font>
            <hr>
        </div>

        <div class="jns">
        <font face="Thoma" size="5">Jenis Jenis Masakan Nusantara</font><br>
            <video width="500" controls>
                <source src="jns.mp4" type="video/mp4">
            </video>
        </div>
        
        <hr>
        
        <div class="tips">
        <font face="Thoma" size="5">Tips Dasar Saat Memasak</font><br>
            <div class="vid">
                <video width="250" controls style="margin-right:16%;">
                    <source src="tips1.mp4" type="video/mp4">
                </video>
                <video width="250" controls style="margin-right:15%;">
                    <source src="tips2.mp4" type="video/mp4">
                </video>
                <video width="250" height="145" controls>
                    <source src="tips3.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="resep">
            <font face="Thoma" size="5">Resep Ayam</font><br>
                <div class="video" >
                    <video controls width="350">
                        <source src="ayam1.mp4" type="video/mp4">
                    </video>
                    
                </div>
            </div>
            
    <section id="three" class="no-padding">
        <p style="text-align:center;"><b>Lagu Potong Bebek Angsa</b></p>
        <div class="col-lg-4 col-sm-6">
            <a href="#Modal1" class="gallery-box" data-toggle="modal" >
                <img src="angsa.jpg" class="img-responsive" alt="Image 1"style="width:300px; margin-top:0px; margin-left:55px;">
            </a>
        </div>
    </section>

            <div class="resep2">
            <font face="Thoma" size="5"> Kue Tradisional</font><br>
                <video controls width="350" >
                    <source src="putu.mp4" type="video/mp4">
                </video>
            </div>
        </div>


        <hr>


    <div id="Modal1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
                <img src="angsa.jpg" alt="" style="width:400px; ">
                <audio ->
                    <source src="potong.mp3">
                </audio> <br><br>
        	    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Tutup</button>
        	</div>
        </div>
        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>