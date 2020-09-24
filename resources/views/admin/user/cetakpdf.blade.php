
    <div class="container">
        <a href="tambahuser">
        <h1>Laporan Petugas</h1>
        @foreach($user as $u)
        <table class="table table-hover" style="text-align:center;">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <th scope="row">{{ $u->id }}</th>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->role }}</td>
                            <td>{{ $u->email }}</td>
                        </tr>
                        <tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
