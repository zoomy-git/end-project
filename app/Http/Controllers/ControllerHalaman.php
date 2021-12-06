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

    public function beranda()
    {
        return view('Beranda', [
            'judul' => 'Beranda'
        ]);
    }

}
