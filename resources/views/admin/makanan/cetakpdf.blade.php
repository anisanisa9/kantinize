
    <div class="container">
    @foreach($makanan as $m)
    <table class="table table-hover" style="text-align:center;">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Harga Makanan</th>
                        <th scope="col">Stok Makanan</th>
                        <th scope="col">Gambar Makanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <th scope="row">{{ $m->id }}</th>
                            <td>{{ $m->nama_makanan }}</td>
                            <td>{{ $m->harga_makanan }}</td>
                            <td>{{ $m->qty_makanan }}</td>
                            <td>{{ $m->gambar_makanan }}</td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
