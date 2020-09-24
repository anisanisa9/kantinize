@extends('layouts.tampil')

@section('isi')

    <div class="container">
    <div class="card mt-5">
                        <div class="card-header text-center">
                            <strong>TAMBAH DATA</strong> 
                        </div>
                        <div class="card-body">
                            <br/>
                            
                            <form method="post" action="{{ route('nambahuser')}}" enctype="multipart/form-data">
        
                                {{ csrf_field() }}
        
                                <div class="form-group">
                                    @if($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name')}}
                                        </div>
                                    @endif
                                    <input type="text" name="name" class="form-control" placeholder="Nama User..">
                                </div>

                                <div class="form-group">
                                    @if($errors->has('role'))
                                        <div class="text-danger">
                                            {{ $errors->first('role')}}
                                        </div>
                                    @endif
                                    <input type="text" name="role" class="form-control" placeholder="Sebagai...">
                                </div>

                                <div class="form-group">
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                    <input type="text" name="email" class="form-control" placeholder="Email...">
                                </div>
        
                                <div class="form-group">
                                    @if($errors->has('password'))
                                        <div class="text-danger">
                                            {{ $errors->first('password')}}
                                        </div>
                                    @endif
                                    <input type="text" name="password" class="form-control" placeholder="Password...">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                    <a href="/user" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
        
                        </div>
                    </div>
    </div>

@endsection