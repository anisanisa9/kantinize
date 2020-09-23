<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Transaksi;
use PDF;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function dashboardkasir()
    {
        return view('awal.dashboard');
    }

    public function index()
    {
        //
        $makanans = Makanan::all();
        return view('transaksi.index', compact('makanans'));
    }

    public function orderan()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.order', compact('transaksi'));
    }

    public function beli(Request $request){
        Transaksi::create([
            'id_user' => $request->id_user,
            'tanggal_order' =>$request->tgl,
            'total_bayar' =>$request->total_bayar
            
        ]);
        return redirect('/ngorder');
    }

    public function orderanpdf(Request $request)
    {
        $transaksi =Transaksi :: all();
        $pdf = PDF::loadView('transaksi.orderpdf', compact('transaksi'));
        return $pdf->stream();
    }

}
