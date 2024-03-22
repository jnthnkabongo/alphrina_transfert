@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Dépôt</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Création Dépôt</li>
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
                            <form class="row g-3" action="{{ route('creation-transactions') }}" method="POST">
                               @csrf
                                <div class="col-md-6">
                                    <label class="form-label">Matricule</label>
                                    <input type="text" class="form-control" id="matricule" name="matricule" value="{{ $generation_matricule }}" readonly>
                                    <div class="text-danger">
                                        @error("matricule")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Téléphone</label>
                                    <input type="number" class="form-control" id="telephone" name="telephone">
                                    <div class="text-danger">
                                        @error("telephone")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nom Emetteur</label>
                                    <input type="text" class="form-control" id="nom_emetteur" name="nom_emetteur">
                                    <div class="text-danger">
                                        @error("nom_emetteur")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Nom Récepteur</label>
                                    <input type="text" class="form-control" id="nom_recepteur" name="nom_recepteur">
                                    <div class="text-danger">
                                        @error("nom_recepteur")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Pays Provenance</label>
                                    <select class="form-control" name="pays_provenance" id="pays_provenance">
                                        <option value="">-- Sélectionner un pays --</option>
                                        @foreach ($liste_pays as $item_liste_pays)
                                            <option value="{{ $item_liste_pays->id }}">{{ Str::upper($item_liste_pays->intitule) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error("pays_provenance")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">Pays Destination</label>
                                    <select class="form-control" name="pays_destination" id="pays_destination">
                                        <option value="">-- Sélectionner un pays --</option>
                                        @foreach ($liste_pays as $item_liste_pays)
                                            <option value="{{ $item_liste_pays->id }}">{{ Str::upper($item_liste_pays->intitule) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error("pays_destination")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Montant</label>
                                    <input type="number" class="form-control" id="montant" name="montant">
                                    <div class="text-danger">
                                        @error("montant")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="inputAddress" class="form-label">Motif</label>
                                    <input type="text" class="form-control" id="motif" name="motif">
                                    <div class="text-danger">
                                        @error("motif")
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="users_id" name="users_id" hidden>
                                </div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
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
        <div class="col-md-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Dette</label>
            </div>
        </div>
        <div class="col-md-12 dette" id="detteField" style="display: none;">
            <div class="row">
                <div class="col-md-6">
                    <label for="" class="form-label">Montant Verser</label>
                    <input type="number" class="form-control" id="montantdette" name="montantdette">
                    <div class="text-danger">
                        @error("montantdette")
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Mode de Paiement</label>
                    <select class="form-control" id="etat" name="etat">
                        <option value="">-- Sélectionnez un mode ---</option>
                        @foreach ($liste_type_dette as $item_type_dette)
                            <option value="{{ $item_type_dette->id }}">{{ Str::upper($item_type_dette->intitule) }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger">
                        @error("etat")
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        var checkbox = document.getElementById('flexSwitchCheckDefault');
        var detteField = document.getElementById('detteField');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                detteField.style.display = 'block';
            } else {
                detteField.style.display = 'none';
            }
        });
    </script>
@endsection
