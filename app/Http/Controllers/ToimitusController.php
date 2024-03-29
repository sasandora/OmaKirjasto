<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toimitus;
use App\Toimittaja;
use App\Kauppapaikka;
use App\teos;


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
        $toimittajat = Toimittaja::all();
        $kauppapaikat = Kauppapaikka::all();
        $teos = Teos::orderBy('suominimi')->get();

        
        return view('sivut/tilausLisaysForm', compact('toimittajat','kauppapaikat','teos'));
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
        $toimitus->toimittajaid = $request->input('toimittaja');
        $toimitus->kauppapaikkaid = $request->input('kauppapaikka');
        $toimitus->tilausaika = $request->input('tilausaika');
        $toimitus->maksettuaika = $request->input('maksettuaika');
        $toimitus->postikulut = $request->input('postikulut');
        $toimitus->saapumisaika = $request->input('saapumisaika');
        $toimitus->save();

        $teos = Teos::findMany($request->teos);
        // Tehdään merkintä kirjoista sarjassa pivot tauluun
        //$teos->tilausid =$toimitus->id;
        Teos::where('id',[$request->teos])->update(['toimitusid'=>$toimitus->id]);

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
        $toimittajat = Toimittaja::find($toimitus->toimittajaid);
        $kauppapaikat = Kauppapaikka::find($toimitus->kauppapaikkaid);
        return view('sivut/tilausinfo', compact('toimitus','toimittajat','kauppapaikat'));
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
        $toimittajat = Toimittaja::all();
        $kauppapaikat = Kauppapaikka::all();
        $toimitus = toimitus::find($id);
        $teos = Teos::orderBy('suominimi')->get();
        return view('sivut/tilausMuokkausForm', compact('toimitus','toimittajat','kauppapaikat','teos'));
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
        $toimitus->toimittajaid = $request->input('toimittaja');
        $toimitus->kauppapaikkaid = $request->input('kauppapaikka');
        $toimitus->tilausaika = $request->input('tilausaika');
        $toimitus->maksettuaika = $request->input('maksettuaika');
        $toimitus->postikulut = $request->input('postikulut');
        $toimitus->saapumisaika = $request->input('saapumisaika');
        $toimitus->save();

        return redirect('/tilaukset')->with('alert-success', 'Muokkaus tallennettu');
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
        return redirect('/tilaukset')->with('alert-success', 'Tilaus poistettu');
    }
}
