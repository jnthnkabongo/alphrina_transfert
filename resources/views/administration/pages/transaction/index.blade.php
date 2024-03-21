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
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <form class="row ">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Rechercher quelque chose..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Rechercher</button>
                                  </div>
                              </form>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="date">
                        </div>
                        <div class="col-md-4">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <a class="btn btn-primary w-100" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        PDF/Jour
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-primary w-100" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                        </svg>
                                        PDF/Total
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="app-content pt-3">
                        <div class="container-xl">

                            <div class="tab-content" id="orders-table-tab-content">
                                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                                        <div class="app-card-body">
                                            <div class="table-responsives">
                                                <table class="table table-hover mb-0 text-left">
                                                    <thead>
                                                        <tr>
                                                            <th>Nº</th>
                                                            <th>Matricule</th>
                                                            <th>Nom Emetteur</th>
                                                            <th>Nom Récepteur</th>
                                                            <th>Téléphone</th>
                                                            <th>Pays Provenance</th>
                                                            <th>Pays Destination</th>
                                                            <th>Montant</th>
                                                            <th>Date </th>
                                                            <th>Motif</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($liste_transaction as $itemtrasaction)
                                                        <tr>
                                                            <td class="cell">{{ ($tous_retraits->perPage() * ($tous_retraits->currentPage() - 1 ))+ $loop->iteration }}</td>
                                                            <td>{{ Str::upper($itemtrasaction->matricule) }}</td>
                                                            <td>{{ $itemtrasaction->nom_emetteur }}</td>
                                                            <td>{{ $itemtrasaction->nom_recepteur }}</td>
                                                            <td>{{ $itemtrasaction->telephone }}</td>
                                                            <th><span class="badge bg-success">{{ Str::upper($itemtrasaction->PaysProvenance->intitule) }}</span></th>
                                                            <th><span class="badge bg-danger">{{ Str::upper($itemtrasaction->PaysDestination->intitule) }}</span></th>
                                                            <th>{{ $itemtrasaction->montant }}</th>
                                                            <td>{{ Carbon\Carbon::parse($itemtrasaction->created_at)->format('d/m/y') }}</td>
                                                            <td>{{ $itemtrasaction->motif }}</td>
                                                            <td class="text-center">
                                                                <a class="btn btn-sm btn-outline-secondary text-dark" href="{{ route('creation-retrait', $itemtrasaction) }}"><i class="fas fa-eye me-1" i></i></a>
                                                                <a class="btn btn-sm btn-outline-secondary text-dark" href="{{ route('modifier-transaction', $itemtrasaction) }}"><i class="fas fa-pencil me-1"></i></a>
                                                                <a class="btn btn-sm btn-outline-secondary text-dark" href="{{ route('suppression-transaction', $itemtrasaction) }}"><i class="fas fa-trash me-1"></i></a>

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
                                        </div>
                                    </div>
                                    <nav class="app-pagination">
                                        {{ $liste_transaction->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="card-footer">
                    <div class="row">
                        <div class="col-lg-4 text-center"> <h5> Somme : <span class="badge bg-success">{{ $somme_transaction }}</span></h5></div>
                        <div class="col-lg-4 text-center"> <h5> Dette : <span class="badge bg-danger">0</span></h5></div>
                        <div class="col-lg-4 text-center"> <h5> Balance : <span class="badge bg-warning">0</span></h5></div>
                    </div>
                </div>-->
            </div>


        </div>

    </main>
@endsection
