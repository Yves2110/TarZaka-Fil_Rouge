<?php

namespace App\Http\Controllers;

use App\Models\Bailleurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BailleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bailleurs=Bailleurs::paginate(10);

        return view('pages.bailleurs', ['bailleurs' => $bailleurs]);
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
        $request->validate( [
            'firstname' => 'required|string|max:255',
            'lastname' => 'bail|required|string|max:255',
            'adresse' => 'bail|required|',
            'numero' => 'bail|required|string|max:255',
            'photo' => 'bail|required|image|max:1024',
        ]);

      Bailleurs::create([
            "firstname" =>$request->firstname,
            "lastname" =>$request->lastname,
            "adresse" =>$request->adresse,
            "email" =>$request->email,
            "numero" =>$request->numero,
            "photo" =>$request->photo->store('/images'),

        ]);

         return back()->with('message', 'Enregistrement effectué avec succès!');
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
    public function destroy($id)
    {
        $bailleurs=Bailleurs::find($id);
        $bailleurs->delete();
        return back()->with('message', 'Suppression éffectué avec succès');
    }
}
