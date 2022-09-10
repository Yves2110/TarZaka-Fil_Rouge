@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire des Locataires</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg">
                    <div class="card-header text-dark fw-bold fs-4">{{ __('Ajout de Locataire') }}</div>

                    <a class="nav-link" href=" {{ route('locataires') }} ">
                        <span class="preview-icon float-md-right rounded-circle">
                            <i class="mdi mdi-format-list-bulleted-type fs-2 text-dark"></i>
                        </span>
                    </a>

                    <div class="card-body">
                        <form method="POST" action=" {{route('Locataire_store')}} " enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="firstname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text" placeholder="Nom"
                                        class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                        value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lastname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text" placeholder="Prénom"
                                        class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                        value="{{ old('lastname') }}" required autocomplete="lastname">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"placeholder=" Addresse Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="numero"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <input id="numero" type="numero" placeholder="Numéro"
                                        class="form-control @error('tel') is-invalid @enderror" name="numero"
                                        value="{{ old('numero') }}" required autocomplete="numero">

                                    @error('numero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="cnib" class="col-md-4 col-form-label text-md-end">{{ __('') }}
                                </label>

                                <div class="col-md-6">
                                    <input id="cnib" placeholder="N° CNIB" type="cnib"
                                        class="form-control @error('cnib') is-invalid @enderror" name="cnib" required
                                        autocomplete="cnib">

                                    @error('cnib')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row ">
                                <label for="maison_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2"></label>

                                        <select class="form-control" id="exampleFormControlSelect2"
                                            name="maison_id" required>
                                            <option>Maisons</option>
                                            @foreach ($maisons as $maison)
                                                <option value="{{ $maison->id }}">{{ $maison->numero_parcelle }} {{ $maison->localisation }}</option>
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
                                        <button class="bg-primary btn-primary file-upload-info"></button>
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
