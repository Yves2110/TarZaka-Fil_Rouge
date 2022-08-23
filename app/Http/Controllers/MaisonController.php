<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use App\Models\Maisons;
use App\Models\Bailleurs;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.maisons');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modeles = Modele::all();
        $bailleurs=Bailleurs::all();
        return view('pages.maisonform', compact('modeles','bailleurs'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function show(Maisons $maisons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function edit(Maisons $maisons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maisons $maisons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maisons  $maisons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maisons $maisons)
    {
        //
    }
}
