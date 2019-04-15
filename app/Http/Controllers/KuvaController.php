<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuva;
use App\Teos;

class KuvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kuva = kuvat::all();
        return view('sivut/kuvat', compact('kuva'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $kuva = new Kuva;
        $kuva->kirjaid  = $id;
        $kuva->url = $request->input('url');
        $kuva->save();

        $teos = Teos::all();
        return view('sivut/kirjat', compact('teos'));

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
        $kuva = new Kuva;
        $kuva->kirjaid  = $id;
        $kuva->url = $request->input('url');
        $kuva->save();

        $teos = Teos::all();
        return view('sivut/kirjat', compact('teos'));
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
