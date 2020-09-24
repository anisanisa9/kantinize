@extends('layouts.tampil')

@section('isi')

    <div class="container">
        <a href="tambahuser"><button type="button" class="btn btn-primary">Tambah Data</button></a><br><br>
                    <table class="table table-hover" style="text-align:center;">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $u)
                        <tr>
                            <th scope="row">{{ $u->id }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->role }}</td>
                            <td>{{ $u->email }}</td>
                            <td>    
                                <div class="div mt-2">
                                    <a href="/edituser/{{ $u->id }}" class="btn btn-warning" style="width:100%;">Edit</a>
                                </div>
                                <div class="div mt-2">
                                    <a href="/deleteuser/{{ $u->id }}" class="btn btn-danger" style="width:100%;">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>

@endsection