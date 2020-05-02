<?php

namespace App\Http\Controllers;

use App\alamat;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $all_alamat = alamat::get();
        return view ('alamat', compact('all_alamat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('tambahalamat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pn = new alamat();
        $pn->id = $request->id;
        $pn->desakelurahan = $request->desakelurahan;
        $pn->kabupaten = $request->kabupaten;
        $pn->provinsi = $request->provinsi;
        $pn->save();
        return redirect('/alamat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function show(alamat $alamat)
    {
         return view('tampilkanalamat',compact('alamat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function edit(alamat $alamat)
    {
         return view('editalamat',compact('alamat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alamat $alamat)
    {
        $alamat->desakelurahan = $request->desakelurahan;
        $alamat->kabupaten = $request->kabupaten;
        $alamat->provinsi = $request->provinsi;
        $alamat->save();
        return redirect('/alamat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alamat  $alamat
     * @return \Illuminate\Http\Response
     */
    public function destroy(alamat $alamat)
    {
        $alamat->delete();
        return redirect('/alamat');
    }
}
