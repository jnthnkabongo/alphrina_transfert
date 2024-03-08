@extends('administration.layouts-admin.entete-admin')
@section('content')
    <main class="mb-5">
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <h1 class="mt-4">Conteneur</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Liste des conteneurs</li>
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
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>N*</th>
                                <th>Numéro reçu</th>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Montant</th>
                                <th>Balance Totale</th>
                                <th>Date </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>N*</th>
                                <th>Numéro reçu</th>
                                <th>Non</th>
                                <th>Matricule</th>
                                <th>Montant</th>
                                <th>Balance Totale</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>001</td>
                                <td>Masuaku Ngonga</td>
                                <td>1011</td>
                                <td>610 $</td>
                                <td>2011/04/25</td>
                                <td>01/03/2024</td>
                                <td>
                                    <a class="fas fa-eye me-1" href=""></a>
                                    <a class="fas fa-pencil me-1" aria-hidden="true" href=""></a>
                                    <a class="fas fa-trash me-1" href=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>002</td>
                                <td>Maria Moyeli</td>
                                <td>1012</td>
                                <td>630 $</td>
                                <td>04/11/024</td>
                                <td>04/02/2024</td>
                                <td>
                                    <a class="fas fa-eye me-1" href=""></a>
                                    <a class="fas fa-pencil me-1" aria-hidden="true" href=""></a>
                                    <a class="fas fa-trash me-1" href=""></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>003</td>
                                <td>Mushika Dani</td>
                                <td>1010</td>
                                <td>270 $</td>
                                <td>2011/01/25</td>
                                <td>01/02/2024</td>
                                <td>
                                    <a class="fas fa-eye me-1" href=""></a>
                                    <a class="fas fa-pencil me-1" aria-hidden="true" href=""></a>
                                    <a class="fas fa-trash me-1" href=""></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </main>
@endsection
