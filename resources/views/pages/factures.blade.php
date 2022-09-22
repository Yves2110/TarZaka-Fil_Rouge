@extends('layouts.home')
@section('content')
    <div class="container  mb-5">
        <div class="header text-center fs-2 text-dark">
            <h1 class="mb-5"> Factures </h1>
            <h5>
                <p class="badge-primary badge  float-left">Status :</p>
            </h5>
            <p class='float-right badge-outline-info w-25 fw-bold'>N° de serie : {{$serie}} </p><br>
            <p>
            <h4 class='fw-bold'>Mr/Mme : {{ $locataire->paiement->firstname }} {{ $locataire->paiement->lastname }}</h4>
            </p>
        </div>
        <div class="corps fw-bold text-dark me-5">
            <p>Intitulé : Reçu de paiement du mois de <b class="float-right me-5">{{$locataire->mois->libeller}}</b> </p>

            <p>Destinataire : <b class="float-right me-5"> {{ $locataire->paiement->firstname }}</b></p>
            <p>Nombre de mois : <b class="float-right me-5">{{ $locataire->nombre }} Mois</b> </p>
            <p>Somme verser : <b class="float-right me-5">{{ $locataire->prix }} Fcfa</b> </p>
            <p>Reste à payer : <b class="float-right me-5">{{ $result }} Fcfa</b> </p>
            <p>Date : <b class="float-right me-5">{{ $locataire->created_at->format('d.M.Y') }}</b> </p>
        </div>
        <div class="foot  mb-5 text-dark">
            <p class="float-right fw-bold">Signature</p>

        </div>
        <a href=" {{route('generatePDF',['download'=>'pdf'])}} "></a>
        <div class="btn btn-danger text-center">Imprimer</div>
    </div>
@endsection
