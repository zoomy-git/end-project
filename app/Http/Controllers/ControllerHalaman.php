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
}
