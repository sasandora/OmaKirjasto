<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\toimittaja;


class ToimittajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toimittaja = toimittaja::all();
        return view('sivut/toimittajat', compact('toimittaja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sivut/toimittajaLisaysForm');
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
                'nimimerkki' => 'required' // Jos toimittajan nimimerkki ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo kirjoittaja
        $toimittaja = new toimittaja;
        $toimittaja->myyjannimi = $request->input('myyjannimi');
        $toimittaja->nimimerkki = $request->input('nimimerkki');
        $toimittaja->osoite = $request->input('osoite');
        $toimittaja->puhelin = $request->input('puhelin');
        $toimittaja->email = $request->input('email');
        $toimittaja->save();

        return redirect('/toimittajat')->with('alert-success', 'Toimittaja lisätty');
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
        $toimittaja = toimittaja::find($id);
        return view('sivut/toimittajainfo', compact('toimittaja'));
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
        $toimittaja = toimittaja::find($id);
        return view('sivut/toimittajaMuokkausForm', compact('toimittaja'));
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
                'nimimerkki' => 'required' // Jos toimittajan nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );

        // Muokataan toimittaja
        $toimittaja = toimittaja::find($id);    //Ei luoda, vaan haetaan toimittaja
        $toimittaja->myyjannimi = $request->input('myyjannimi');
        $toimittaja->nimimerkki = $request->input('nimimerkki');
        $toimittaja->osoite = $request->input('osoite');
        $toimittaja->puhelin = $request->input('puhelin');
        $toimittaja->email = $request->input('email');
        $toimittaja->save();

        return redirect('/toimittajat')->with('alert-success', 'Muokkaus tallennettu');
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
        $toimittaja = toimittaja::find($id);
        $toimittaja->delete();
        return redirect('/toimittajat')->with('alert-success', 'Toimittaja poistettu');
    }
}
