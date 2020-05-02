<?php

namespace App\Http\Controllers;

use App\agama;
use Illuminate\Http\Request;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_agama = agama::get();
        return view ('agama', compact('all_agama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahagama');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pn = new agama();
        $pn->id = $request->id;
        $pn->agama = $request->agama;
        $pn->save();
        return redirect('/agama');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function show(agama $agama)
    {
         return view('tampilkanagama',compact('agama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function edit(agama $agama)
    {
        return view('editagama',compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agama $agama)
    {
        $agama->agama = $request->agama;
        $agama->save();
        return redirect('/agama');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agama  $agama
     * @return \Illuminate\Http\Response
     */
    public function destroy(agama $agama)
    {
        $agama->delete();
        return redirect('/agama');
    }
}
