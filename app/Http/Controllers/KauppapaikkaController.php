<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kauppapaikka;


class KauppapaikkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kauppapaikka = kauppapaikka::all();
        return view('sivut/toimituspaikat', compact('kauppapaikka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sivut/toimituspaikkaLisaysForm');
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
                'nimi' => 'required' // Jos kauppapaikan nimi ei ole täytetty, palataan takaisin sivulle ja näytetään virhe
            ]
        );
        // Luo kauppapaikka
        $kauppapaikka = new kauppapaikka;
        $kauppapaikka->nimi = $request->input('nimi');
        $kauppapaikka->save();

        return redirect('/toimituspaikat')->with('alert-success', 'Kauppapaikka lisätty');;
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
        $kauppapaikka = kauppapaikka::find($id);
                return view('sivut/toimituspaikat');
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
        $kauppapaikka = kauppapaikka::find($id);
        return view('sivut/toimituspaikkaMuokkausForm', compact('kauppapaikka'));
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
        $kauppapaikka = kauppapaikka::find($id);    //Ei luoda, vaan haetaan kauppapaikka
        $kauppapaikka->nimi = $request->input('nimi');
        $kauppapaikka->save();

        return redirect('/toimituspaikat')->with('alert-success', 'Muokkaus tallennettu');
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
        $kauppapaikka = kauppapaikka::find($id);
        $kauppapaikka->delete();
        return redirect('/toimituspaikat')->with('alert-success', 'Kauppapaikka poistettu');
    }
}
