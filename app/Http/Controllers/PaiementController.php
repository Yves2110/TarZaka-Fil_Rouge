<?php

namespace App\Http\Controllers;

use App\Models\Locataires;
use App\Models\Mois;
use App\Models\Paiement;
use App\Models\Paiements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locataires= Paiements::all();
        return view('pages.paiementsliste', compact('locataires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locataires= Locataires::all();
        $mois = Mois::all();
        return view('pages.paiement',  compact('locataires','mois'));
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
            'mois_id' => 'required|string|max:255',
            'prix' => 'bail|required|string|max:255',
            'nombre' => 'bail|required|string|max:255',
            'locataire_id' => 'bail|required|string|max:255',

        ]);

        Paiements::create([
            "locataire_id" => $request->locataire_id,
            "mois_id" => $request->mois_id,
            "nombre" => $request->nombre,
            "prix" => $request->prix,


        ]);

        return redirect()->route('factures')->with('message', 'Enregistrement effectué avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {$serie=rand(1,25);
        $locataire =  Paiements::find($id);
        $mouth = (int) $locataire->nombre;
        $getInitialPrice =  (int)$locataire->paiement->house->prix * (int)$mouth;
        $getActuPrice = (int)$locataire->prix * (int)$mouth;
        $result =   (int)$getInitialPrice - (int)$getActuPrice;

        return view('pages.factures', compact('locataire','result','serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $factures=Paiements::find($id);
    //     return view('pages.factures', compact('factures'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiements $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiements $paiement)
    {
        //
    }
}
