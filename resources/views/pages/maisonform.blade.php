@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire des Maisons</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg">
                    <div class="card-header text-dark fw-bold fs-4">{{ __('Ajout de Maison') }}</div>

                    <a class="nav-link">
                        <span class="preview-icon float-md-right rounded-circle">
                            <i class="mdi mdi-format-list-bulleted-type fs-2 text-dark"></i>
                        </span>
                    </a>

                    <div class="card-body">
                        <form method="POST" action=" {{route('maisons.store')}} ">
                            @csrf

                            <div class="row mb-1">
                                <label for="modele_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"></label>

                                        <select class="form-control" id="exampleFormControlSelect2" value="{{ old('modele_id') }}" name="modele_id" required>
                                            <option>Modèle</option>
                                        @foreach ($modeles as $item)
                                            <option>{{ $item->type }}</option>
                                            @endforeach
                                        </select>

                                      </div>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label for="localisation"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="localisation" type="text" placeholder="Localisation"
                                        class="form-control @error('localisation') is-invalid @enderror" name="localisation"
                                        value="{{ old('localisation') }}" required autocomplete="localisation">

                                    @error('localisation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-1">
                                <label for="prix"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" placeholder="Prix"
                                        class="form-control @error('prix') is-invalid @enderror" name="prix"
                                        value="{{ old('prix') }}" required autocomplete="prix">

                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row ">
                                <label for="numero_parcelle"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="numero_parcelle" type="text" placeholder="Numéro de la Parcelle"
                                        class="form-control @error('numero_parcelle') is-invalid @enderror" name="numero_parcelle"
                                        value="{{ old('numero_parcelle') }}" required autocomplete="numero_parcelle">

                                    @error('numero_parcelle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row ">
                                <label for="bailleur_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"></label>

                                        <select class="form-control" id="exampleFormControlSelect2" value="{{ old('bailleur_id') }}" name="bailleur_id" required>
                                            <option>Bailleur</option>
                                        @foreach ($bailleurs as $bailleur)
                                            <option>{{ $bailleur->firstname }}{{ $bailleur->lastname }}</option>
                                            @endforeach
                                        </select>

                                      </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __('') }}
                                </label>
                                <div class="col-md-6 form-group">
                                    <div class="input-group col-xs-12">
                                        <button class="bg-primary btn-primary file-upload-info "></button>
                                        <input type="file" name="photo" class="form-control file-upload-info" placeholder="Photo">
                                    </div>
                                </div>
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-danger bg-danger form-control fw-bolder">
                                        {{ __('Enregistrer') }}
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
