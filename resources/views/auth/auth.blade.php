<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Absolu Groupe</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <div class="col-lg-5 mt-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header "><h3 class="text-center font-weight-light my-4">Connexion</h3></div>
                                    <div class="card-body">

                                        <form class="p-4 p-md-5  bg-body-tertiary" action="{{ route('soumission') }}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                              <input type="email" class="form-control" id="email" name="email" placeholder="Jael@example.com" value="{{ old('email') }}">
                                              <label for="floatingInput">Addresse E-mail</label>
                                              <div class="text-danger">
                                                @error("email")
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                              <label for="floatingPassword">Password</label>
                                              <div class="text-danger">
                                                @error("password")
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="checkbox mb-3">
                                              <label>
                                                <input type="checkbox" value="remember-me"> Se souvenir de moi
                                              </label>
                                            </div>
                                            <button class="w-100 btn btn-lg btn-primary " type="submit">Se connecter</button>
                                            <hr class="my-4">
                                            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
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

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-dark mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Bestech Consult 2024</div>
                            <div>
                                <a href="#">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
