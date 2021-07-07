<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\SuratTugas;
use Illuminate\Http\Request;

class SuratTugasController extends Controller
{
    
    public function index()
    {
        $data = SuratTugas::get();
        return view('admin.surattugas.index',compact('data'));
    }
    
    public function create()
    {
        $pegawai = Pegawai::get();
        return view('admin.surattugas.create',compact('pegawai'));
    }
    
    public function store(Request $req)
    {
        $check = SuratTugas::where('no_surat', $req->no_surat)
        ->first();
        if($check == null){
            SuratTugas::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/surattugas');     
        } else{
            toastr()->error('No Surat Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = SuratTugas::find($id);
        $pegawai = Pegawai::get();
        return view('admin.surattugas.edit',compact('data','pegawai'));
    }
    
    public function update(Request $req, $id)
    {
        SuratTugas::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/surattugas');   
    }
    
    public function destroy($id)
    {
        SuratTugas::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
