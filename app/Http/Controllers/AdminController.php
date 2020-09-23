<?php

namespace App\Http\Controllers;

use App\User;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardadmin()
    {
        // return view('admin.admindashboard');
        return view('awal.dashboard');
    }

    public function index(){
        $user = User::all();
        return view('admin.user',['user'=> $user] );
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
    	return redirect('/user');
    }

    public function tambah(){
        return view('admin.user.tambah');
    }
    public function nambah(Request $request)
    {
    	$this->validate($request,[
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);
 
        User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => $request->password,
            
        ]);
        return redirect('/user');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit', ['user' => $user]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $user = User::find($id);
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password= $request->password;
        $user->save();
 
    	return redirect('/user');
    }

    public function cetak_pdf()
    {
	$user = User::all();
	$pdf = PDF::loadview('admin.user.cetakpdf',['user'=>$user]);
	return $pdf->download('laporaan_user.pdf');
    }
}
