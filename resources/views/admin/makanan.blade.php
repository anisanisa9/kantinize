@extends('layouts.tampil')

@section('isi')

    <div class="container">
        <a href="{{ route('tambah') }}"><button type="button" class="btn btn-primary">Tambah Data</button></a><br><br>
                    <table class="table table-hover" style="text-align:center;">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Makanan</th>
                        <th scope="col">Harga Makanan</th>
                        <th scope="col">Stok Makanan</th>
                        <th scope="col">Gambar Makanan</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($makanan as $m)
                        <tr>
                            <th scope="row">{{ $m->id }}</th>
                            <td>{{ $m->nama_makanan }}</td>
                            <td>{{ $m->harga_makanan }}</td>
                            <td>{{ $m->qty_makanan }}</td>
                            <td>
                                <img src="{{ asset('gambar/' . $m->gambar_makanan) }}" 
                                    alt="{{ $m->gambar_makanan }}" width="150px" height="100px">
                            <td>
                                <div class="div mt-2">
                                    <a href="/editmakanan/{{ $m->id }}" class="btn btn-warning" style="width:100%;">Edit</a>
                                </div>
                                <div class="div mt-2">
                                    <a href="/deletemakanan/{{ $m->id }}" class="btn btn-danger" style="width:100%;">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>

@endsection