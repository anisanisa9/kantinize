@extends('layouts.tampil')

@section('isi')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Orders</h1>
        <a href="{{url('/orderanpdf')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-file-pdf fa-md text-white-50"></i><span class="ml-2">Generate PDF</span>
        </a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Orders
            </h6>
        </div>

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
@endsection