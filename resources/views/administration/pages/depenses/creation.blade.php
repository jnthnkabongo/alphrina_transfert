@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Retrait</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Création Retrait</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <a href="{{ route('index-depenses') }}" class="btn btn-primary w-100"><i class="fa fa-columns" aria-hidden="true"></i>&nbsp;&nbsp; Liste Retrait</a>
                </div>
                <hr class="mb-4">
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-10 col-md-10">
                    <div class="card">
                        <div class="card-header pt-4"></div>
                        <div class="card-body">
                            <form class="row g-3" action="{{ route('creations-retrait', $itemtrasaction->id) }}" method="GET">
                            @csrf
                            <div class="col-md-6">
                                <label class="form-label">Identifiant</label>
                                <input type="text" class="form-control" id="matricule" name="matricule" value="{{ $itemtrasaction->id }}" readonly>
                            </div>
                                <div class="col-md-6">
                                    <label class="form-label">Matricule</label>
                                    <input type="text" class="form-control" id="matricule" name="matricule" value="{{ Str::upper( $itemtrasaction->matricule ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nom Emetteur</label>
                                    <input type="text" class="form-control" id="nom_emetteur" name="nom_emetteur" value="{{ Str::upper( $itemtrasaction->nom_emetteur ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Nom Récepteur</label>
                                    <input type="text" class="form-control" id="nom_recepteur" name="nom_recepteur" value="{{ Str::upper( $itemtrasaction->nom_recepteur ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="number" class="form-control" id="telephone" name="telephone" value="{{ $itemtrasaction->telephone }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Montant</label>
                                    <input type="text" class="form-control" id="montant" name="montant" value="{{ Str::upper( $itemtrasaction->montant ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Pays Provenance</label>
                                    <input type="text" class="form-control" id="pays_provenance" name="pays_provenance" value="{{ Str::upper( $itemtrasaction->PaysProvenance->intitule ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Pays Destination</label>
                                    <input type="text" class="form-control" name="" value="{{ Str::upper( $itemtrasaction->PaysDestination->intitule ) }}" readonly>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Motif</label>
                                    <input type="text" class="form-control" id="motif" name="motif" value="{{ Str::upper( $itemtrasaction->motif ) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Etat</label>
                                    <input type="text" class="form-control" id="somme" name="somme" value="{{ Str::upper( $itemtrasaction->etat ) }}" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Faire un Retrait</label>
                                    <select class="form-control" name="etat" id="etat">
                                        <option value="">-- Selectionner une action --</option>
                                        <option value="1">Faire retrait</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="users_id" name="users_id" hidden>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">Faire un Retrait </button>
                                </div>
                            </form>
                            @if(Session::has('message'))
                            <script>
                                swal("message", "{{ Session::get('message') }}", 'success', {
                                    showConfirmButton: false,
                                    title: '',
                                    timer: 15000
                                });
                            </script>
                        @endif
                        </div>
                        <div class="card-footer text-muted  pt-4"></div>
                    </div>

                </div>
                <div></div>
            </div>
        </div>
    </main>
@endsection
