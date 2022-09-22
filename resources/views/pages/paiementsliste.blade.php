@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire de Paiements</h1>
    </div>



    <div class="row corps">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-dark text-uppercase">Les paiements</h4>
                    @if (Auth::user()->role_id === 1)
                        <a class="nav-link" href=" {{ route('Paiements') }} ">
                            <span class="preview-icon float-md-right rounded-circle">
                                <i class="mdi mdi-account-plus fs-2 text-dark"></i>
                            </span>
                        </a>
                    @endif
                    <div class="table-responsive">
                        <table class="table text-dark">
                            <thead class="text-dark text-weight-bold">
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> Nom du Locataire </th>
                                    <th> Numéro </th>
                                    <th> N° CNIB </th>
                                    <th> Maison loué </th>
                                    <th> Somme versé </th>
                                    <th> Date de Paiement </th>
                                    <th> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($locataires as $locataire)
                                    <tr>
                                        <td>
                                            <img src=" {{ asset('storage/' . $locataire->paiement->photo) }} " alt="">
                                        </td>
                                        <td>
                                            {{ $locataire->paiement->firstname }} {{ $locataire->paiement->lastname }}
                                        </td>
                                        <td> {{ $locataire->paiement->numero }} </td>
                                        <td> {{ $locataire->paiement->cnib }} </td>
                                        <td> {{ $locataire->paiement->house->numero_parcelle }}
                                            {{ $locataire->paiement->house->localisation }} </td>
                                            <td> {{ $locataire->prix }} Fcfa</td>
                                            <td> {{ $locataire->created_at }} </td>
                                        <td>
                                            <a href=" {{route('factures.show',$locataire->id)}} ">
                                                <button class="btn btn-primary">Facture</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="#" method="post">
                                                @csrf
                                                @method('edit')
                                                <button  class='badge badge-success'>
                                                    Editer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @empty
                                    <h1 class="text-dark">Aucun</h1>
                                @endforelse

                            </tbody>
                        </table>

                        {{ $locataires->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
