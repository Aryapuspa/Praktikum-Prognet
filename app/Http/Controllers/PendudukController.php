<?php

namespace App\Http\Controllers;

use App\penduduk;
use App\agama;
use App\alamat;
use App\pekerjaan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_penduduk = penduduk::get();
        return view('penduduk',compact('all_penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agamas=agama::all();
        $alamats=alamat::all();
        $pekerjaans=pekerjaan::all();
        return view('tambahpenduduk',compact('agamas','alamats','pekerjaans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pn = new penduduk();
        $pn->id = $request->id;
        $pn->nama = $request->nama;
        $pn->nik = $request->nik;
        $pn->telepon = $request->telepon;
        $pn->id_agama = $request->id_agama;
        $pn->alamat_lengkap = $request->alamat_lengkap;
        $pn->id_alamat = $request->id_alamat;
        $pn->id_pekerjaan = $request->id_pekerjaan;
        $pn->save();
        return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(penduduk $penduduk)
    {
        $agamas=agama::all();
        $alamats=alamat::all();
        $pekerjaans=pekerjaan::all();
        return view('tampilkanpenduduk',compact('penduduk','agamas','alamats','pekerjaans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(penduduk $penduduk)
    {
        $agamas=agama::all();
        $alamats=alamat::all();
        $pekerjaans=pekerjaan::all();
        return view('editpenduduk',compact('penduduk','agamas','alamats','pekerjaans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penduduk $penduduk)
    {
        $penduduk->nama = $request->nama;
        $penduduk->nik = $request->nik;
        $penduduk->telepon = $request->telepon;
        $penduduk->id_agama = $request->id_agama;
        $penduduk->alamat_lengkap = $request->alamat_lengkap;
        $penduduk->id_alamat = $request->id_alamat;
        $penduduk->id_pekerjaan = $request->id_pekerjaan;
        $penduduk->save();
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect('/penduduk');
    }
}
