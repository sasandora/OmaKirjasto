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
        //Näytetään kirjojen etusivu. Käydään siis kaikki kirjat.
        $teos = Teos::all();
        return view('sivut/kirjat', compact('teos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Näytetään sivu, jolla luodaan kirja
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

        return redirect('/teos')->with('alert-success', 'Kirja lisätty');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Käytetään yhden kirjan näyttämiseen
        $teos = Teos::find($id);
        return view('sivut/teosinfo', compact('teos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Viedään kirja editoitavaksi formiin
        $teos = Teos::find($id);
        return view('sivut/teosMuokkausForm', compact('teos'));
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
        $this->validate(
            $request,
            [
                'alkupenimi' => 'required' // Jos alkupe-nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );

        // Muokataan teos, eli kirja
        $teos = Teos::find($id);    //Ei luoda, vaan haetaan teos
        $teos->suominimi = $request->input('suominimi');
        $teos->alkupenimi = $request->input('alkupenimi');
        $teos->kunto = $request->input('kunto');
        $teos->tyyppi = $request->input('tyyppi');
        $teos->status = $request->input('status');
        $teos->hinta = $request->input('hinta');
        $teos->suomentaja = $request->input('suomentaja');
        $teos->kuvittaja = $request->input('kuvittaja');
        $teos->save();

        return redirect('/teos')->with('alert-success', 'Muokkaus tallennettu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teos = Teos::find($id);
        $teos->delete();
        return redirect('/teos')->with('alert-success', 'Kirja poistettu');
    }
}
