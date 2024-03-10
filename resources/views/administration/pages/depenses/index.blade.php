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
                    <a href="{{ route('creation-depenses') }}" class="btn btn-primary w-100"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp; Nouveau</a>
                </div>
                <hr class="mb-4">
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <div class="app-content pt-3">
                        <div class="container-xl">
                            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4" >
                                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Transfert Journalier</a>
                                <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Transferts</a>
                            </nav>
                            <div class="mt-5">
                                <div class="col-auto">
                                     <div class="page-utilities">
                                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form class="row ">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                            <button class="btn btn-primary" type="button" id="button-addon2">Rechercher</button>
                                                          </div>
                                                      </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control" type="date">
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="row">
                                                        <a class="btn btn-outline w-50" href="#">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                            </svg>
                                                            PDF Journalier
                                                        </a>
                                                        <a class="btn btn-outline w-50" href="#">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                                <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                                            </svg>
                                                            PDF Totalité
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                                            <th>Dette</th>
                                                            <th>Montant</th>
                                                            <th>Date </th>
                                                            <th>Motif</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($liste_transaction as $itemtrasaction)
                                                        <tr>
                                                            <td class="cell">{{ ($liste_transaction->perPage() * ($liste_transaction->currentPage() - 1 ))+ $loop->iteration }}</td>
                                                            <td>{{ Str::upper($itemtrasaction->matricule) }}</td>
                                                            <td>{{ $itemtrasaction->nom_emetteur }}</td>
                                                            <td>{{ $itemtrasaction->nom_recepteur }}</td>
                                                            <td>{{ $itemtrasaction->telephone }}</td>
                                                            <th>{{ Str::upper($itemtrasaction->bl_no) }}</th>
                                                            <th>{{ $itemtrasaction->montant }}</th>
                                                            <td>{{ Carbon\Carbon::parse($itemtrasaction->created_at)->format('d/m/y') }}</td>
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
                                        </div>
                                    </div>
                                    <nav class="app-pagination">
                                        {{ $liste_transaction->links() }}
                                    </nav>
                                </div>

                                <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                                    <div class="app-card app-card-orders-table mb-5">
                                        <div class="app-card-body">
                                            <div class="table-responsive">

                                                <table class="table mb-0 text-left">
                                                    <thead>
                                                        <tr>
                                                            <th class="cell">Order</th>
                                                            <th class="cell">Product</th>
                                                            <th class="cell">Customer</th>
                                                            <th class="cell">Date</th>
                                                            <th class="cell">Status</th>
                                                            <th class="cell">Total</th>
                                                            <th class="cell"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="cell">#15346</td>
                                                            <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                                                            <td class="cell">John Sanders</td>
                                                            <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                                            <td class="cell"><span class="badge bg-success">Paid</span></td>
                                                            <td class="cell">$259.35</td>
                                                            <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                                                        </tr>
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
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-4 text-center"> <h5> Somme : <span class="badge bg-success">0</span></h5></div>
                        <div class="col-lg-4 text-center"> <h5> Dette : <span class="badge bg-danger">0</span></h5></div>
                        <div class="col-lg-4 text-center"> <h5> Balance : <span class="badge bg-warning">0</span></h5></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
