<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data = SuratMasuk::get();
        return view('admin.suratmasuk.index',compact('data'));
    }
    
    public function create()
    {
        return view('admin.suratmasuk.create');
    }
    
    public function store(Request $req)
    {
        $check = SuratMasuk::where('no_surat', $req->no_surat)
        ->first();
        if($check == null){
            SuratMasuk::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/suratmasuk');     
        } else{
            toastr()->error('No Surat Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = SuratMasuk::find($id);
        return view('admin.suratmasuk.edit',compact('data'));
    }
    
    public function update(Request $req, $id)
    {
        SuratMasuk::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/suratmasuk');   
    }
    
    public function destroy($id)
    {
        SuratMasuk::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
