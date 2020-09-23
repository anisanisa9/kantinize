<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makanan;
use PDF;

class MakananController extends Controller
{
    public function index(){
        $makanan = Makanan::all();
        return view('admin.makanan',['makanan'=> $makanan] );
    }

    public function cetak(){
        $makanan = Makanan::all();
        return view('admin.makanan',['makanan'=> $makanan] );
    }

    public function delete($id)
    {
        $makanan = Makanan::find($id);
        $makanan->delete();
    	return redirect('/menuview');
    }

    public function tambah(){
        return view('admin.makanan.tambah');
    }
    public function nambah(Request $request)
    {
    	$this->validate($request,[
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
            'qty_makanan' => 'required',
            'gambar_makanan' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('gambar_makanan');
        $name_file = $image->getClientOriginalName();
        $image->move(base_path('/public/gambar'), $name_file);
    
 
        Makanan::create([
            'nama_makanan' => $request->nama_makanan,
            'harga_makanan' => $request->harga_makanan,
            'qty_makanan' => $request->qty_makanan,
            'gambar_makanan' => $name_file,
            
        ]);
        return redirect('/menuview');
    }

    public function edit($id_makanan){
        $makanan = Makanan::find($id_makanan);
        return view('admin.makanan.edit', ['makanan' => $makanan]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
            'qty_makanan' => 'required',            
            'gambar_makanan' => 'required'
        ]);
    
        $makanan = Makanan::find($id);
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        $makanan->qty_makanan = $request->qty_makanan;
        $makanan->gambar_makanan = $request->gambar_makanan;
        $makanan->save();
 
    	return redirect('/menuview');
    }

    public function cetak_pdf()
    {
	$makanan = Makanan::all();
	$pdf = PDF::loadview('admin.makanan.cetakpdf',['makanan'=>$makanan]);
	return $pdf->download('laporaan_makanan.pdf');
    }
}
