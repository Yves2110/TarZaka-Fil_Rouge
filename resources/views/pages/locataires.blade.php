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

                <a class="nav-link" href=" {{route('Locataire_Form')}} ">
                    <span class="preview-icon float-md-right rounded-circle">
                        <i class="mdi mdi-account-plus text-dark"></i>
                    </span>

                </a>

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
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/faces/face1.jpg" alt="image" />
                                    <span class="pl-2">Henry Klein</span>
                                </td>
                                <td> 02312 </td>
                                <td> $14,500 </td>
                                <td> Dashboard </td>
                                <td> Credit card </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-success">Approved</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/faces/face2.jpg" alt="image" />
                                    <span class="pl-2">Estella Bryan</span>
                                </td>
                                <td> 02312 </td>
                                <td> $14,500 </td>
                                <td> Website </td>
                                <td> Cash on delivered </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-outline-warning">Pending</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/faces/face5.jpg" alt="image" />
                                    <span class="pl-2">Lucy Abbott</span>
                                </td>
                                <td> 02312 </td>
                                <td> $14,500 </td>
                                <td> App design </td>
                                <td> Credit card </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-outline-danger">Rejected</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/faces/face3.jpg" alt="image" />
                                    <span class="pl-2">Peter Gill</span>
                                </td>
                                <td> 02312 </td>
                                <td> $14,500 </td>
                                <td> Development </td>
                                <td> Online Payment </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-outline-success">Approved</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-muted m-0">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <img src="assets/images/faces/face4.jpg" alt="image" />
                                    <span class="pl-2">Sallie Reyes</span>
                                </td>
                                <td> 02312 </td>
                                <td> $14,500 </td>
                                <td> Website </td>
                                <td> Credit card </td>
                                <td> 04 Dec 2019 </td>
                                <td>
                                    <div class="badge badge-outline-success">Approved</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
