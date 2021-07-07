<?php

namespace App\Http\Controllers;

use App\Models\SuratIzin;
use Illuminate\Http\Request;

class SuratIzinController extends Controller
{
    
    public function index()
    {
        $data = SuratIzin::get();
        return view('admin.suratizin.index',compact('data'));
    }
    
    public function create()
    {
        return view('admin.suratizin.create');
    }
    
    public function store(Request $req)
    {
        $check = SuratIzin::where('no_surat', $req->no_surat)
        ->first();
        if($check == null){
            SuratIzin::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/suratizin');     
        } else{
            toastr()->error('No Surat Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = SuratIzin::find($id);
        return view('admin.suratizin.edit',compact('data'));
    }
    
    public function update(Request $req, $id)
    {
        SuratIzin::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/suratizin');   
    }
    
    public function destroy($id)
    {
        SuratIzin::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
