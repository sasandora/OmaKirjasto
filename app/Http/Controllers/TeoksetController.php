<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teos;

class TeoksetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teos = teos::all();
        return view('sivut/kirjat', compact('teos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sivut/kirjaLisaysForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'alkupenimi' => 'required' // Jos alkupe-nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo teos
        $teos = new Teos;
        $teos->suominimi = $request->input('suominimi');
        $teos->alkupenimi = $request->input('alkupenimi');
        $teos->kunto = $request->input('kunto');
        $teos->tyyppi = $request->input('tyyppi');
        $teos->status = $request->input('status');
        $teos->hinta = $request->input('hinta');
        $teos->suomentaja = $request->input('suomentaja');
        $teos->kuvittaja = $request->input('kuvittaja');
        $teos->save();

        return redirect('/kirjat');

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
    public function update(Request $request, $id)
    {
        //
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
    }
}
