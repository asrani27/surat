<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    
    public function index()
    {
        $data = Pegawai::get();
        return view('admin.pegawai.index',compact('data'));
    }
    
    public function create()
    {
        $jabatan = Jabatan::get();
        return view('admin.pegawai.create',compact('jabatan'));
    }
    
    public function store(Request $req)
    {
        $check = Pegawai::where('nip', $req->nip)->first();
        if($check == null){
            Pegawai::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/pegawai');     
        } else{
            toastr()->error('NIP Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = Pegawai::find($id);
        $jabatan = Jabatan::get();
        return view('admin.pegawai.edit',compact('data','jabatan'));
    }
    
    public function update(Request $req, $id)
    {
        Pegawai::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/pegawai');   
    }
    
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
