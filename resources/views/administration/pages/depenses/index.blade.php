@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Retrait</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Liste des retraits</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <button class="btn btn-primary w-100"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp; Nouveau</button>
                </div>
                <hr class="mb-4">
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple" class="table table table-hover">
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Matricule</th>
                                <th>Nom Emetteur</th>
                                <th>Nom Récepteur</th>
                                <th>Téléphone</th>
                                <th>BL NO</th>
                                <th>Montant</th>
                                <th>Date </th>
                                <th>Motif</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
            </div>

        </div>

    </main>
@endsection
