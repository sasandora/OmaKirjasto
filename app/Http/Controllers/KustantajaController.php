<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kustantaja;

class KustantajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kustantaja = kustantaja::all();
        return view('sivut/kustantajat', compact('kustantaja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sivut/kustantajaLisaysForm');
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
                'nimi' => 'required' // Jos kustantajan nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo kirjoittaja
        $kustantaja = new kustantaja;
        $kustantaja->nimi = $request->input('nimi');
        $kustantaja->kotipaikka = $request->input('kotipaikka');
        $kustantaja->perustamisvuosi = $request->input('perustamisvuosi');
        $kustantaja->lopettamisvuosi = $request->input('lopettamisvuosi');
        $kustantaja->save();

        return redirect('/kustantajat')->with('alert-success', 'Kustantaja lisätty');;
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
        $kustantaja = kustantaja::find($id);
        return view('sivut/kustantajainfo', compact('kustantaja'));
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
        $kustantaja = kustantaja::find($id);
        return view('sivut/kustantajaMuokkausForm', compact('kustantaja'));
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
                'nimi' => 'required' // Jos nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        //
        $kustantaja = kustantaja::find($id); 
        $kustantaja = new kustantaja;
        $kustantaja->nimi = $request->input('nimi');
        $kustantaja->kotipaikka = $request->input('kotipaikka');
        $kustantaja->perustamisvuosi = $request->input('perustamisvuosi');
        $kustantaja->lopettamisvuosi = $request->input('lopettamisvuosi');
        $kustantaja->save();

        return redirect('/kustantajat')->with('alert-success', 'Muokkaus tallennettu');
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
        $kustantaja = kustantaja::find($id);
        $kustantaja->delete();
        return redirect('/kustantajat')->with('alert-success', 'Kustantaja poistettu');
    }
}
