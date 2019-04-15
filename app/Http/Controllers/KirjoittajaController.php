<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kirjoittaja;

class KirjoittajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Näytetään kirjoittajien etusivu. Käydään kaikki kirjoittajat.
        $kirjoittaja = kirjoittaja::all();
        return view('sivut/kirjoittajat', compact('kirjoittaja'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //Näytetään sivu, jolla luodaan kirjoittaja
        return view('sivut/kirjoittajaLisaysForm');

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
        $this->validate(
            $request,
            [
                'nimi' => 'required' // Jos kirjoittajan nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo kirjoittaja
        $kirjoittaja = new kirjoittaja;
        $kirjoittaja->nimi = $request->input('nimi');
        $kirjoittaja->kuvaus = $request->input('kuvaus');
        $kirjoittaja->syntymaaika = $request->input('syntymaaika');
        $kirjoittaja->kuolinaika = $request->input('kuolinaika');
        $kirjoittaja->syntymapaikka = $request->input('syntymapaikka');
        $kirjoittaja->alias = $request->input('alias');
        $kirjoittaja->save();

        return redirect('/kirjoittajat')->with('alert-success', 'Kirjoittaja lisätty');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Käytetään yhden kirjoittajan näyttämiseen
        $kirjoittaja = kirjoittaja::find($id);
        return view('sivut/kirjoittajainfo', compact('kirjoittaja'));
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
        $kirjoittaja = kirjoittaja::find($id);
        return view('sivut/kirjoittajaMuokkausForm', compact('kirjoittaja'));
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
        $this->validate(
            $request,
            [
                'nimi' => 'required' // Jos kirjoittajan nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );

        // Muokataan kirjoittaja
        $kirjoittaja = kirjoittaja::find($id);    //Ei luoda, vaan haetaan kirjoittaja
        $kirjoittaja->nimi = $request->input('nimi');
        $kirjoittaja->kuvaus = $request->input('kuvaus');
        $kirjoittaja->syntymaaika = $request->input('syntymaaika');
        $kirjoittaja->kuolinaika = $request->input('kuolinaika');
        $kirjoittaja->syntymapaikka = $request->input('syntymapaikka');
        $kirjoittaja->alias = $request->input('alias');
        $kirjoittaja->save();

        return redirect('/kirjoittajat')->with('alert-success', 'Muokkaus tallennettu');

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
        $kirjoittaja = kirjoittaja::find($id);
        $kirjoittaja->delete();
        return redirect('/kirjoittajat')->with('alert-success', 'Kirjoittaja poistettu');

    }
}
