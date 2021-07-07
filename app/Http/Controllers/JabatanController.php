<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::get();
        return view('admin.jabatan.index',compact('data'));
    }
    
    public function create()
    {
        return view('admin.jabatan.create');
    }
    
    public function store(Request $req)
    {
        $check = Jabatan::where('nama', $req->nama)->first();
        if($check == null){
            Jabatan::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/jabatan');     
        } else{
            toastr()->error('Jabatan Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = Jabatan::find($id);
        return view('admin.jabatan.edit',compact('data'));
    }
    
    public function update(Request $req, $id)
    {
        Jabatan::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/jabatan');   
    }
    
    public function destroy($id)
    {
        Jabatan::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
