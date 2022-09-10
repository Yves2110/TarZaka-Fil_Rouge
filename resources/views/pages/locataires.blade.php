@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire des Locataires</h1>
    </div>



    <div class="row corps">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-dark text-uppercase">Statuts des locataires</h4>
                    @if (Auth::user()->role_id === 1)
                        <a class="nav-link" href=" {{ route('Locataire_Form') }} ">
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
                                    <th> Ordre </th>
                                    <th> Numéro </th>
                                    <th> N° CNIB </th>
                                    <th> Mode de Paiement </th>
                                    <th> Date de Paiement </th>
                                    <th> Status de paiment </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($locataires as $locataire )
                                <tr>
                                    <td>
                                        <img src=" {{ asset('storage/'.$locataire->photo)}} " alt="">
                                    </td>
                                    <td>
                                        <img src="assets/images/faces/face1.jpg" alt="image" />
                                        <span class="pl-2">Henry Klein</span>
                                    </td>
                                    <td> {{$locataire->firstname}}  </td>
                                    <td> {{$locataire->firstname}} </td>
                                    <td> {{$locataire->firstname}} </td>
                                    <td> {{$locataire->firstname}} </td>
                                    <td> {{$locataire->firstname}} </td>
                                    <td>
                                        <div class="badge badge-success">A jour</div>
                                        <div class="badge badge-warning">Pas à jour</div>
                                    </td>
                                </tr>

                                @empty
                                <h1 class="text-dark">Aucun</h1>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
