<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teos;
use App\Kirjoittaja;
use App\Kustantaja;
use App\Kuva;



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

        // return view('sivut/kirjat');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kirjoittajat = Kirjoittaja::all();
        $kustantajat = Kustantaja::all();
        //Näytetään sivu, jolla luodaan kirja
        return view('sivut/kirjaLisaysForm', compact('kirjoittajat', 'kustantajat'));
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
        $teos->kirjoittajaid = $request->input('kirjoittaja');
        $teos->kustantajaid = $request->input('kustantaja');
        $teos->vuosi = $request->input('vuosi');
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
        $kirjoittajat = Kirjoittaja::find($teos->kirjoittajaid);
        $kustantajat = Kustantaja::find($teos->kustantajaid);
        $kuva = Kuva::where('kirjaid',$id)->orderby('created_at','desc')->first();

        return view('sivut/teosinfo', compact('teos', 'kirjoittajat', 'kustantajat','kuva'));
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
        $kirjoittajat = Kirjoittaja::all();
        $kustantajat = Kustantaja::all();
        $teos = Teos::find($id);
        return view('sivut/teosMuokkausForm', compact('teos','kirjoittajat', 'kustantajat'));
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
        $teos->kirjoittajaid = $request->input('kirjoittaja');
        $teos->kustantajaid = $request->input('kustantaja');
        $teos->vuosi = $request->input('vuosi');
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
