<?php

namespace App\Http\Controllers;

use App\pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_pekerjaan = pekerjaan::get();
        return view ('pekerjaan', compact('all_pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('tambahpekerjaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pn = new pekerjaan();
        $pn->id = $request->id;
        $pn->pekerjaan = $request->pekerjaan;
        $pn->kategori = $request->kategori;
        $pn->save();
        return redirect('/pekerjaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(pekerjaan $pekerjaan)
    {
        return view('tampilkanpekerjaan',compact('pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(pekerjaan $pekerjaan)
    {
         return view('editpekerjaan',compact('pekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pekerjaan $pekerjaan)
    {
        $pekerjaan->pekerjaan = $request->pekerjaan;
        $pekerjaan->kategori = $request->kategori;
        $pekerjaan->save();
        return redirect('/pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pekerjaan $pekerjaan)
    {
        $pekerjaan->delete();
        return redirect('/pekerjaan');
    }
}
