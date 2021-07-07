<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPinjam extends Model
{
    use HasFactory;
    protected $table = 'suratpinjam';
    protected $guarded = ['id'];
}
