@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Dépôt</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Liste des dépôt</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <a href="{{ route('creation-transaction') }}" class="btn btn-primary w-100"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp; Nouveau</a>
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
                            @forelse ($liste_transaction as $itemtrasaction)
                                <tr>
                                    <td>{{ $itemtrasaction->id }}</td>
                                    <td>{{ Str::upper($itemtrasaction->matricule) }}</td>
                                    <td>{{ $itemtrasaction->nom_emetteur }}</td>
                                    <td>{{ $itemtrasaction->nom_recepteur }}</td>
                                    <td>{{ $itemtrasaction->telephone }}</td>
                                    <th>{{ Str::upper($itemtrasaction->bl_no) }}</th>
                                    <th>{{ $itemtrasaction->montant }}</th>
                                    <td>{{ $itemtrasaction->date_depot }}</td>
                                    <td>{{ $itemtrasaction->motif }}</td>
                                    <td>
                                        <a class="text-dark" href="{{ route('visualisation-transaction', $itemtrasaction) }}"><i class="fas fa-eye me-1" i></i></a>
                                        <a class="text-dark" href="{{ route('modifier-transaction', $itemtrasaction) }}"><i class="fas fa-pencil me-1"></i></a>
                                        <a class="text-dark" href="{{ route('suppression-transaction', $itemtrasaction) }}"><i class="fas fa-trash me-1"></i></a>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="cell" colspan="12">
                                        <div class="" style="text-align: center">Aucune transaction effectuée</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6 text-center">
                            <h4>Somme : <span class="badge text-bg-success"> {{ $somme_transaction }}</span></h4>
                        </div>
                        <div class="col-lg-6 text-center">
                            <span>Balance : 600</span>
                        </div>
                    </div>
                </div>
            </div>
            @if(Session::has('message'))
            <script>
                swal("Message", "{{ Session::get('message') }}", 'success', {
                    button:true,
                    button: "OK",
                    timer: 1000
                });
            </script>
        @endif
        </div>

    </main>
@endsection
