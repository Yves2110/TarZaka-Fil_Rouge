@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire des Maisons</h1>
    </div>

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 40%;

        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
            background-color: rgb(211, 129, 35);
        }
    </style>
    <div class="row">

        @if (Auth::user()->role_id === 1)
            <a class="nav-link" href=" {{ route('maisons.create') }} ">
                <span class="preview-icon float-md-right rounded-circle">
                    <i class="mdi mdi-key-plus fs-2 text-dark"></i>
                </span>
            </a>
        @endif

        <center>
            @if (session()->has('message'))
                <div class="alert alert-success fs-3">
                    {{ session()->get('message') }}
                </div>
            @endif
        </center>

        @forelse ($maisons as $maison)
            <div class="card d-flex full-width col-6 my-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <a href="#">
                    <img src=" {{ asset('storage/' . $maison->photo) }} " alt="" style="width:100%">
                </a>
                <div class="container">
                    <h4><b> {{ $maison->modele->type }} </b></h4>
                    <h4><b> {{ $maison->bailleur->firstname }} {{ $maison->bailleur->lastname }} </b></h4>
                    <h4><b>
                            <p> {{ $maison->prix }} Fcfa</p>
                        </b></h4>
                    <h4><b>
                            {{-- <p class="badge badge-success"> Occupé par: {{$locataire->house->numero_parcelle}}</p> --}}
                        </b></h4>
                </div>
            </div>
        @empty
            <center>
                <h1 classe="text-dark">Aucun</h1>
            </center>
        @endforelse
    </div>
    {{ $maisons->links() }}
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-gradient-light">
                    <img src=" {{ asset('storage/' . $maison->photo) }} " alt="" style="width:100%"
                        class="img-responsive col-md-3">
                    <form action="{{ route('bailleurs.destroy', $maison->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="badge badge-success">Editer</div>
                        <button class='btn btn-danger'>
                            Supprimer
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
