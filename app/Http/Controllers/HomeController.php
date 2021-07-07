<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pegawai()
    {
        return view('pegawai.home');
    }
    
    public function superadmin()
    {
        return view('admin.home');
    }
}
