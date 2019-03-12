<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sarja;
use App\teos;
use Barryvdh\Debugbar\Facade as Debugbar;



class SarjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarja = sarja::all();
        return view('sivut/sarjat', compact('sarja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Näytetään sivu, jolla luodaan kirja
        return view('sivut/sarjaLisaysForm');
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
                'nimi' => 'required' // Jos alkupe-nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo sarja
        $sarja = new sarja;
        $sarja->nimi = $request->input('nimi');
        $sarja->kuvaus = $request->input('kuvaus');
        $sarja->save();

        return redirect('/sarjat')->with('alert-success', 'Sarja lisätty');;
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
        // Viedään kirjat lisättäväksi  
        $teos = Teos::orderBy('suominimi')->get();
        // Viedään sarja editoitavaksi formiin
        $sarja = sarja::find($id);

        return view('sivut/sarjaMuokkausForm', compact('sarja', 'teos'));
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
                'nimi' => 'required' // Jos alkupe-nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Haetaan sarja
        $sarja = sarja::find($id);

        $sarja->nimi = $request->input('nimi');
        $sarja->kuvaus = $request->input('kuvaus');

        $sarja->save();

        // Haetaan kirjat
        $teos = Teos::findMany($request->teos);
        // Tehdään merkintä kirjoista sarjassa pivot tauluun
        $sarja->teos()->attach($teos);

        return redirect('/sarjat')->with('alert-success', 'Kirjat lisätty');;
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
