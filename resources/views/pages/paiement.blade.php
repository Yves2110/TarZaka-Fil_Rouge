@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire de paiement</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg">
                    <div class="card-header text-dark fw-bold fs-4">{{ __('Formulaire de paiement') }}</div>

                    <a class="nav-link" href=" {{route('ListesPaiements')}} ">
                        <span class="preview-icon float-md-right rounded-circle">
                            <i class="mdi mdi-format-list-bulleted-type fs-2 text-dark"></i>
                        </span>
                    </a>

                    <center>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </center>

                    <div class="card-body my-4">
                        <form method="POST" action=" {{ route('Money') }} " enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-1">
                                <label for="locataire_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"></label>
                                        <select class="form-control" id="exampleFormControlSelect2"
                                            name="locataire_id" required>
                                            <option>Locataires</option>
                                            @foreach ($locataires as $item)
                                                <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="prix"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="number" placeholder="Somme à versé"
                                        class="form-control @error('prix') is-invalid @enderror" name="prix"
                                        value="{{ old('prix') }}" required autocomplete="prix">

                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-">
                                <label for="nombre"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="number" placeholder="Nombre de mois"
                                        class="form-control @error('prix') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre') }}" required autocomplete="nombre">

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label for="mois_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"></label>
                                        <select class="form-control" id="exampleFormControlSelect2"
                                            name="mois_id" required>
                                            <option>Mois</option>
                                            @foreach ($mois as $jour)
                                                <option value="{{ $jour->id }}"> {{ $jour->libeller }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-Success bg-success form-control fw-bolder">
                                        {{ __('Payé') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
