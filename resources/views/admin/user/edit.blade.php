@extends('layouts.tampil')

@section('isi')    
        <div class="card mt-5">
                        <div class="card-header text-center">
                            <strong>EDIT DATA</strong> 
                        </div>
                        <div class="card-body">
                            <br/>
                            
                            <form method="post" action="/updateuser/{{ $user->id }}">
        
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
        
                                <div class="form-group">
                                    <label for="">Nama User </label>
                                    @if($errors->has('judul'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>
        
                                <div class="form-group">
                                <label for="">Sebagai...</label>
                                    @if($errors->has('role'))
                                        <div class="text-danger">
                                            {{ $errors->first('role')}}
                                        </div>
                                    @endif
                                    <input type="text" name="role" class="form-control" value="{{ $user->role}}">
                                </div>

                                <div class="form-group">
                                <label for="">Email</label>
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                    <input type="text" name="email" class="form-control" value="{{ $user->email}}">
                                </div>

                                <div class="form-group">
                                <label for="">Password</label>
                                    @if($errors->has('password'))
                                        <div class="text-danger">
                                            {{ $errors->first('password')}}
                                        </div>
                                    @endif
                                    <input type="text" name="password" class="form-control" value="{{ $user->password }}">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                    <a href="{{route('user')}}" class="btn btn-primary">Kembali</a>
                                </div>
                            </form>
        
                        </div>
                    </div>
    @endsection