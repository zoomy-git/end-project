<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $sekarang = date('Y-m-d');
        $seminggu = gmdate('Y-m-d',strtotime('+7 days',strtotime($sekarang)));       
        $target = Target::orderBy('tanggal', 'ASC')->get();
        return view('Beranda', [
            'judul' => "Beranda",
            'target' => $target,
            'sekarang'=> $sekarang,
            'seminggu' => $seminggu,
        ]);
    }
}
