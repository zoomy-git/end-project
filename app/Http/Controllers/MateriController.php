<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materi=Materi::all();
        return view('Materi', [
            'judul' => "Materi",
            'materi' => $materi,
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
     * @param  \App\Http\Requests\StoreMateriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tambah = new Materi();
        if ($request->isVideo==="true"){
            $tambah->isVideo=true;
        } else {
            $tambah->isVideo=false;
        }
        $embed = $request->link;
        if ($tambah->isVideo){$embed = Str::replace('watch?v=', 'embed/', $request->link);}
        $tambah->link = $embed;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->kategori = $request->kategori;
        $tambah->save();
        return redirect('/Materi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriRequest  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $materi = Materi::find($request->id);
        if ($request->isVideo==="true"){
            $materi->isVideo=true;
        } else {
            $materi->isVideo=false;
        }
        $embed = $request->link;
        if ($materi->isVideo){$embed = Str::replace('watch?v=', 'embed/', $request->link);}
        $materi->link = $embed;
        $materi->deskripsi = $request->deskripsi;
        $materi->kategori = $request->kategori;
        $materi->save();
        return redirect('/Materi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $materi = Materi::find($id);
        $materi->delete();
        return redirect('/Materi');
    }
}
