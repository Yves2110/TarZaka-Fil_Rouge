<?php

namespace App\Http\Controllers;

use App\Models\Modele;
use App\Models\Maisons;
use App\Models\Bailleurs;
use App\Models\Locataires;
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
        $maisons = Maisons::paginate(4);
        $locataire= Locataires::all();
        return view('pages.maisons',  compact('maisons','locataire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modeles = Modele::all();
        $bailleurs = Bailleurs::all();
        return view('pages.maisonform', compact('modeles', 'bailleurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'modele_id' => 'required|string|max:255',
            'prix' => 'bail|required|string|max:255',
            'numero_parcelle' => 'bail|required|string|max:255',
            'bailleur_id' => 'bail|required|string|max:255',
            'localisation' => 'bail|required|string|max:255',
            'photo' => 'bail|required|image|max:2024',
        ]);

        Maisons::create([
            "bailleur_id" => $request->bailleur_id,
            "modele_id" => $request->modele_id,
            "prix" => $request->prix,
            "localisation" => $request->localisation,
            "numero_parcelle" => $request->numero_parcelle,
            "photo" => $request->photo->store('/images'),

        ]);

        return back()->with('message', 'Enregistrement effectué avec succès!');
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
    public function destroy($id)
    {
        $maisons=Maisons::find($id);
        $maisons->delete();
        return back()->with('message', 'Suppression éffectué avec succès');
    }
}
