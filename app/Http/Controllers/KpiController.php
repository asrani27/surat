<?php

namespace App\Http\Controllers;

use App\Models\Kpi;
use Illuminate\Http\Request;

class KpiController extends Controller
{
    public function index()
    {
        $data = Kpi::get();
        return view('admin.kpi.index',compact('data'));
    }
    
    public function create()
    {
        return view('admin.kpi.create');
    }
    
    public function store(Request $req)
    {
        $check = Kpi::where('nama_aspek', $req->nama_aspek)->first();
        if($check == null){
            Kpi::create($req->all());
            toastr()->success('Berhasil Di Simpan');
            return redirect('superadmin/kpi');     
        } else{
            toastr()->error('Nama Aspek Sudah Ada');
            return back();
        }
    }
    
    public function edit($id)
    {
        $data = Kpi::find($id);
        return view('admin.kpi.edit',compact('data'));
    }
    
    public function update(Request $req, $id)
    {
        Kpi::find($id)->update($req->all());
        toastr()->success('Berhasil Di Update');
        return redirect('superadmin/kpi');   
    }
    
    public function destroy($id)
    {
        Kpi::find($id)->delete();
        toastr()->success('Berhasil Di Hapus');
        return back();
    }
}
