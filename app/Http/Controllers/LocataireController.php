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
            'maison_id' => 'bail|required|string|max:255',
            'firstname' => 'required|string|max:255',
            'lastname' => 'bail|required|string|max:255',
            'cnib' => 'bail|required|string|max:255',
            'email' => 'bail|required|',
            'numero' => 'bail|required|string|max:255',
            'photo' => 'bail|required|image|',
        ]);

      Locataires::create([
          "maison_id" =>$request->maison_id,
            "firstname" =>$request->firstname,
            "lastname" =>$request->lastname,
            "cnib" =>$request->cnib,
            "email" =>$request->email,
            "photo" =>$request->photo->store('/images'),
            "numero" =>$request->numero,

        ]);

         return back()->with('message', 'Enregistrement effectué avec succès!');
    }
}
