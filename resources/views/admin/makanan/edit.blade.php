@extends('layouts.tampil')

@section('isi')    
        <div class="card mt-5">
                        <div class="card-header text-center">
                            <strong>TAMBAH DATA</strong> 
                        </div>
                        <div class="card-body">
                            <br/>
                            
                            <form method="post" action="/update/{{ $makanan->id }}">
        
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
        
                                <div class="form-group">
                                    <label for="">Nama Makanan </label>
                                    @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                    <input type="text" name="nama_makanan" class="form-control" value="{{ $makanan->nama_makanan }}">
                                </div>
        
                                <div class="form-group">
                                <label for="">harga_makanan</label>
                                    @if($errors->has('gambar'))
                                        <div class="text-danger">
                                            {{ $errors->first('gambar')}}
                                        </div>
                                    @endif
                                    <input type="text" name="harga_makanan" class="form-control" value="{{ $makanan->harga_makanan}}">
                                </div>

                                <div class="form-group">
                                <label for="">Stok Makanan</label>
                                    @if($errors->has('cuplikan'))
                                        <div class="text-danger">
                                            {{ $errors->first('cuplikan')}}
                                        </div>
                                    @endif
                                    <input type="text" name="qty_makanan" class="form-control" value="{{ $makanan->qty_makanan }}">
                                </div>

                                <div class="form-group">
                                <label for="">Gambar Makanan </label>
                                    @if($errors->has('harga'))
                                        <div class="text-danger">
                                            {{ $errors->first('harga')}}
                                        </div>
                                    @endif
                                    <input type="text" name="gambar_makanan" class="form-control" value="{{ $makanan->gambar_makanan }}">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                    <a href="" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
        
                        </div>
                    </div>
    @endsection