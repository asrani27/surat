<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Evaluasi;
use App\Models\SuratIzin;
use App\Models\SuratMasuk;
use App\Models\SuratTugas;
use App\Models\SuratPinjam;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    public function pegawai()
    {
        $data = Pegawai::get();
        $pdf = PDF::loadView('admin.laporan.pegawai',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
    public function suratmasuk()
    {
        $data = SuratMasuk::get();
        $pdf = PDF::loadView('admin.laporan.suratmasuk',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
    public function surattugas()
    {
        $data = SuratTugas::get();
        $pdf = PDF::loadView('admin.laporan.surattugas',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
    
    public function suratizin()
    {
        $data = SuratIzin::get();
        $pdf = PDF::loadView('admin.laporan.suratizin',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
    
    public function suratpinjam()
    {
        $data = SuratPinjam::get();
        $pdf = PDF::loadView('admin.laporan.suratpinjam',compact('data'))->setPaper('legal','landscape');
        return $pdf->stream();
    }

    public function evaluasi(Request $req)
    {
        $periode = $req->tahun;
        $pegawai = Pegawai::find($req->pegawai_id);
        $data = Evaluasi::where('tahun', $req->tahun)->where('pegawai_id', $req->pegawai_id)->get();
        $pdf = PDF::loadView('admin.laporan.evaluasi',compact('data','periode','pegawai'))->setPaper('legal','landscape');
        return $pdf->stream();
    }
}
