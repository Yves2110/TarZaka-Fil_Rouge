<?php

namespace App\Http\Controllers;

use App\Models\Bailleurs;
use Illuminate\Http\Request;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.bailleurs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.bailleurform');
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
     * @param  \App\Models\Bailleurs  $bailleurs
     * @return \Illuminate\Http\Response
     */
    public function show(Bailleurs $bailleurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bailleurs  $bailleurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Bailleurs $bailleurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bailleurs  $bailleurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bailleurs $bailleurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bailleurs  $bailleurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bailleurs $bailleurs)
    {
        //
    }
}
