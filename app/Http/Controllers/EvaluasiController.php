<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use App\Models\Pegawai;
use App\Models\Evaluasi;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    
    public function index()
    {
        $pegawai = Pegawai::get();
        $data = Evaluasi::get();
        return view('admin.evaluasi.index',compact('data','pegawai'));
    }
    
    public function create()
    {
        $pegawai = Pegawai::get();
        $kpi = Kpi::get();
        return view('admin.evaluasi.create',compact('pegawai','kpi'));
    }
    
    public function store(Request $req)
    {
        $check = Evaluasi::where('tahun', $req->tahun)->where('pegawai_id', $req->pegawai_id)
        ->where('kpi_id', $req->kpi_id)
        ->first();
        if($check == null){
            Evaluasi::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/evaluasi');     
        } else{
            toastr()->error('Nilai Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = Evaluasi::find($id);
        
        $pegawai = Pegawai::get();
        $kpi = Kpi::get();
        return view('admin.evaluasi.edit',compact('data','pegawai','kpi'));
    }
    
    public function update(Request $req, $id)
    {
        Evaluasi::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/evaluasi');   
    }
    
    public function destroy($id)
    {
        Evaluasi::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
