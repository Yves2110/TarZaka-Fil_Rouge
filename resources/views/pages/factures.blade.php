@extends('layouts.home')
@section('content')
    <div class="container  mb-5">
        <div class="header text-center fs-2 text-dark">
            <h1 class="mb-5">Facture</h1>
            <h5>
                <p class="badge-primary badge  float-left">Status :</p>
            </h5>
            <p class='float-right badge-outline-info w-25 fw-bold'>N° de serie :</p><br>
            <p>
            <h4 class='fw-bold'>Mr/Mme :</h4>
            </p>
        </div>
        <div class="corps fw-bold text-dark">
            <p>Intituler : </p>
            <p>Destinataire :</p>
            <p>Nombre de mois :</p>
            <p>Somme verser :</p>
            <p>Reste à payer :</p>
            <p>Date :</p>
        </div>
        <div class="foot  mb-5 text-dark">
            <p class="float-right">Signature</p>

        </div>
    </div>
@endsection
