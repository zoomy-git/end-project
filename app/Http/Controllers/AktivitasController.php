<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aktivitas=Aktivitas::orderBy('tanggal', 'ASC')
            ->orderBy('pukul','ASC')->get();
        return view('Aktivitas', [
            'judul' => "Aktivitas",
            'aktivitas' => $aktivitas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tambah = new Aktivitas();
        $tambah->nama = $request->nama;
        $tambah->pukul = $request->pukul;
        $tambah->kategori = $request->kategori;
        $tambah->tanggal = $request->tanggal;
        $tambah->user_id = $request->user_id;
        $tambah->save();
        return redirect('/Aktivitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $aktivitas = Aktivitas::find($request->id);
        $aktivitas->nama = $request->nama;
        $aktivitas->pukul = $request->pukul;
        $aktivitas->kategori = $request->kategori;
        $aktivitas->tanggal = $request->tanggal;
        $aktivitas->save();
        return redirect('/Aktivitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aktivitas = Aktivitas::find($id);
        $aktivitas->delete();
        return redirect('/Aktivitas');
    }
}
