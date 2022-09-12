<?php

namespace App\Http\Controllers;

use App\Models\Locataires;
use App\Models\Maisons;
use Illuminate\Http\Request;

class LocataireController extends Controller
{
    public function index()
    {
        $locataires=Locataires::all();
        return view('pages.locataires', compact('locataires'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
         $maisons=Maisons::all();
        return view('pages.locataireform', compact('maisons'));
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
            'email' => 'bail|required|',
            'numero' => 'bail|required|string|max:255',
            'cnib' => 'bail|required|string|max:255',
            'maison_id' => 'bail|required|string|max:255',
            'photo' => 'bail|required|image|max:2024',
        ]);

      Locataires::create([
            "firstname" =>$request->firstname,
            "lastname" =>$request->lastname,
            "adresse" =>$request->adresse,
            "email" =>$request->email,
            "cnib" =>$request->cnib,
            "numero" =>$request->numero,
            "maison_id" =>$request->maison_id,
            "photo" =>$request->photo->store('/images'),

        ]);

         return back()->with('message', 'Enregistrement effectué avec succès!');
    }
}
