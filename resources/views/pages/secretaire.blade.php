@extends('layouts.home')
@section('content')
<div class="bande ms-5 d-flex align-items-center justify-content-center text-dark text-weight-bold">
    <h1>Gestionnaire des Secrétaires</h1>
</div>



<div class="row corps">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-dark text-uppercase">Liste des Secrétaires</h4>
                @foreach ($users as $user)
                @if ($user->role_id ===1)
                <a class="nav-link" href=" {{route('bailleurs.create')}} ">
                    <span class="preview-icon float-md-right rounded-circle">
                        <i class="mdi mdi-account-plus text-dark fs-2"></i>
                    </span>
                </a>
                @endif
                @endforeach

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
                                    <th> Email </th>
                                    <th> Numéro </th>
                                    <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src=" {{ asset('storage/'.$user->photo)}} " alt="">
                                </td>
                                <td> {{$user->firstname}} </td>
                                <td> {{$user->lastname}} </td>
                                <td> {{$user->email}} </td>
                                <td> {{$user->numero}} </td>
                                <td>
                                    {{-- <div class="badge badge-success">Editer</div> --}}
                                    <form action="{{route('destroye',$user->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class='btn btn-success'>
                                            Editer
                                        </button>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
