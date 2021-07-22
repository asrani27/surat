<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\SuratPinjam;
use Illuminate\Http\Request;

class SuratPinjamController extends Controller
{
    
    public function index()
    {
        $data = SuratPinjam::get();
        return view('admin.suratpinjam.index',compact('data'));
    }
    
    public function create()
    {
        return view('admin.suratpinjam.create');
    }
    
    public function store(Request $req)
    {
        $check = SuratPinjam::where('no_surat', $req->no_surat)
        ->first();
        if($check == null){
            SuratPinjam::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/suratpinjam');     
        } else{
            toastr()->error('No Surat Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = SuratPinjam::find($id);
        $pegawai = Pegawai::get();
        return view('admin.suratpinjam.edit',compact('data','pegawai'));
    }
    
    public function update(Request $req, $id)
    {
        SuratPinjam::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/suratpinjam');   
    }
    
    public function destroy($id)
    {
        SuratPinjam::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
