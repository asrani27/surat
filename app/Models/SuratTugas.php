<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;
    protected $table = 'surattugas';
    protected $guarded = ['id'];

    public function pemberitugas()
    {
        return $this->belongsTo(Pegawai::class, 'pemberi_tugas');
    }
    
    public function penerimatugas()
    {
        return $this->belongsTo(Pegawai::class, 'penerima_tugas');
    }
}
