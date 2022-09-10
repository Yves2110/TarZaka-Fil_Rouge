@extends('layouts.home')
@section('content')
    <div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
        <h1>Gestionnaire des Bailleurs</h1>
    </div>

    <div class="row corps">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-dark text-uppercase">Statuts des bailleurs</h4>

                    @if (Auth::user()->role_id === 1)
                        <a class="nav-link" href=" {{ route('bailleurs.create') }} ">
                            <span class="preview-icon float-md-right rounded-circle">
                                <i class="mdi mdi-account-plus text-dark fs-2"></i>
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
                                    <th> </th>
                                    <th> Nom </th>
                                    <th> Prénom </th>
                                    <th> Numéro </th>
                                    <th> Email </th>
                                    <th> Adresse </th>
                                    <th> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bailleurs as $bailleur)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <img src=" {{ asset('storage/'.$bailleur->photo)}} " alt="">
                                        </td>
                                        <td> {{$bailleur->firstname}} </td>
                                        <td> {{$bailleur->lastname}} </td>
                                        <td> {{$bailleur->numero}} </td>
                                        <td> {{$bailleur->email}} </td>
                                        <td> {{$bailleur->adresse}} </td>
                                        <td>
                                            <form action="{{route('bailleurs.destroy',$bailleur->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="badge badge-success">Editer</div>
                                                <button  class='btn btn-danger'>
                                                   Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <h1 class="text-dark">Aucun</h1>
                                    @endforelse
                                </tbody>
                            </table>
                            {{$bailleurs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
