<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\toimitus;


class ToimitusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toimitus = toimitus::all();
        return view('sivut/tilaukset', compact('toimitus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('sivut/tilausLisaysForm');
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
                'tilausaika' => 'required' // Jos tilauksen aika ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo kirjoittaja
        $toimitus = new toimitus;
        $toimitus->toimittajaid = $request->input('toimittajaid');
        $toimitus->kauppapaikkaid = $request->input('kauppapaikkaid');
        $toimitus->tilausaika = $request->input('tilausaika');
        $toimitus->maksettuaika = $request->input('maksettuaika');
        $toimitus->postikulut = $request->input('postikulut');
        $toimitus->saapumisaika = $request->input('saapumisaika');
        $toimitus->save();

        return redirect('/tilaukset')->with('alert-success', 'Tilaus lisätty');
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
        $toimitus = toimitus::find($id);
        return view('sivut/toimitusinfo', compact('toimitus'));
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
        $toimitus = toimitus::find($id);
        return view('sivut/tilausMuokkausForm', compact('toimitus'));
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
                'tilausaika' => 'required' // Jos toimituksen aika ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );

        // Muokataan toimittaja
        $toimitus = toimitus::find($id);    //Ei luoda, vaan haetaan toimitus
        $toimitus->toimittajaid = $request->input('toimittajaid');
        $toimitus->kauppapaikkaid = $request->input('kauppapaikkaid');
        $toimitus->tilausaika = $request->input('tilausaika');
        $toimitus->maksettuaika = $request->input('maksettuaika');
        $toimitus->postikulut = $request->input('postikulut');
        $toimitus->saapumisaika = $request->input('saapumisaika');
        $toimitus->save();

        return redirect('/toimitukset')->with('alert-success', 'Muokkaus tallennettu');
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
        $toimitus = toimitus::find($id);
        $toimitus->delete();
        return redirect('/toimitukset')->with('alert-success', 'Tilaus poistettu');
    }
}
