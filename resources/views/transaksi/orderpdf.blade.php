<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan Transaksi</title>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Transaksi</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Id Order</th>
                                <th scope="col" class="text-center">Total Harga</th>
                                <th scope="col" class="text-center">Tanggal Pembelian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $transaction)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <th class="text-center">{{ $transaction->id_transaksi }}</th>
                                    <th class="text-center">Rp. {{ $transaction->total_bayar }} </th>
                                    <th class="text-center"> {{ $transaction->tanggal_order }} </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</body>
</html>
