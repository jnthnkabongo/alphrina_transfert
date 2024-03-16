@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Dépôt</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Modifier Dépôt</li>
                    </ol>
                </div>
                <div class="col-lg-8 col-md-8">

                </div>
                <div class="col-lg-2 col-md-2 mt-5">
                    <a href="{{ route('index-transaction') }}" class="btn btn-primary w-100"><i class="fa fa-columns" aria-hidden="true"></i>&nbsp;&nbsp; Liste Dépôt</a>
                </div>
                <hr class="mb-4">
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-10 col-md-10">
                    <div class="card">
                        <div class="card-header pt-4"></div>
                        <div class="card-body">
                            <form class="row g-3" action="{{ route('modifier-transactions', $itemtrasaction->id) }}" method="GET">
                                @csrf
                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Numéro Réçu</label>
                                <input type="text" id="" name="" class="form-control" value="{{ $itemtrasaction->id }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Matricule</label>
                                    <input type="email" id="matricule" name="matricule"  class="form-control" value="{{ Str::upper($itemtrasaction->matricule) }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom Emetteur</label>
                                    <input type="text" id="nom_emetteur" name="nom_emetteur"  class="form-control" value="{{ $itemtrasaction->nom_emetteur }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Nom Récepteur</label>
                                    <input type="text" id="nom_recepteur" name="nom_recepteur"  class="form-control" value="{{ $itemtrasaction->nom_recepteur }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Téléphone</label>
                                    <input type="number" id="telephone" name="telephone"  class="form-control" value="{{ $itemtrasaction->telephone }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">BL NO</label>
                                    <input type="text" id="bl_no" name="bl_no"  class="form-control" value="{{ $itemtrasaction->bl_no }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Montant</label>
                                    <input type="number" id="montant" name="montant"  class="form-control" value="{{ $itemtrasaction->montant }}">
                                </div>
                                <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Date du jour</label>
                                <input type="date" id="date_depot" name="date_depot"  class="form-control" value="{{ $itemtrasaction->date_depot }}">
                                </div>
                                <div class="col-md-12">
                                <label for="inputAddress" class="form-label">Motif</label>
                                <input type="text" id="motif" name="motif"  class="form-control" value="{{ $itemtrasaction->motif }}">
                                </div>

                                <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Modifier</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted  pt-4"></div>
                    </div>
                    @if(Session::has('message'))
                        <script>
                            swal("Message", "{{ Session::get('message') }}", 'success', {
                                showConfirmButton:true,
                                button: "OK",
                                timer: 1000
                            });
                        </script>
                    @endif
                </div>
                <div></div>
            </div>

        </div>
    </main>
@endsection
