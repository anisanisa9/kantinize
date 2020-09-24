@extends('layouts.tampil')

@section('isi')

    <div class="container">
    <div class="card mt-5">
                        <div class="card-header text-center">
                            <strong>TAMBAH DATA</strong> 
                        </div>
                        <div class="card-body">
                            <br/>
                            
                            <form method="post" action="{{ route('nambah')}}" enctype="multipart/form-data">
        
                                {{ csrf_field() }}
        
                                <div class="form-group">
                                    @if($errors->has('nama'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                    <input type="text" name="nama_makanan" class="form-control" placeholder="Nama Makanan...">
                                </div>

                                <div class="form-group">
                                    @if($errors->has('harga_makanan'))
                                        <div class="text-danger">
                                            {{ $errors->first('harga_makanan')}}
                                        </div>
                                    @endif
                                    <input type="text" name="harga_makanan" class="form-control" placeholder="Harga Makanan...">
                                </div>

                                <div class="form-group">
                                    @if($errors->has('qty_makanan'))
                                        <div class="text-danger">
                                            {{ $errors->first('qty_makanan')}}
                                        </div>
                                    @endif
                                    <input type="text" name="qty_makanan" class="form-control" placeholder="Stok Makanan...">
                                </div>
        
                                <div class="form-group">
                                    @if($errors->has('gambar_makanan'))
                                        <div class="text-danger">
                                            {{ $errors->first('gambar_makanan')}}
                                        </div>
                                    @endif
                                    <input type="file" name="gambar_makanan">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                    <a href="/menuview" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
        
                        </div>
                    </div>
    </div>

@endsection