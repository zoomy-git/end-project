<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target = Target::orderBy('tanggal', 'ASC')->get();
        return view('Target', [
            'judul' => "Target",
            'target' => $target
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
        $tambah = new Target();
        $tambah->nama = $request->nama;
        $tambah->kategori = $request->kategori;
        $tambah->tanggal = $request->tanggal;
        $tambah->user_id = $request->user_id;
        $tambah->save();
        return redirect('/Target');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show(Target $target)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function edit(Target $target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $target = Target::find($request->id);
        $target->nama = $request->nama;
        $target->kategori = $request->kategori;
        $target->tanggal = $request->tanggal;
        $target->save();
        return redirect('/Target');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $target = Target::find($id);
        $target->delete();
        return redirect('/Target');
    }
}
