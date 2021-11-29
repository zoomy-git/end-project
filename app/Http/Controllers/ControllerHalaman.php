<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHalaman extends Controller
{
    public function index($halaman)
    {
        return view($halaman, [
            'judul' => $halaman,
        ]);
    }

    public function landing()
    {
        return view('landing', [
            
        ]);
    }

    public function login()
    {
        return self::index('Beranda');
    }

}
