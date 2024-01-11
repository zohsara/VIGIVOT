<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Inscription</title>

    <!-- Polices personnalisées pour ce modèle-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles personnalisés pour ce modèle-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Rangée imbriquée dans le corps de la carte -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créer un compte !</h1>
                            </div>
                            <form action="{{route('register')}}" method="POST" class="user">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="prenom" name="prenom"
                                            placeholder="Prénom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="nom" name="nom"
                                            placeholder="Nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email"  id="email" class="form-control form-control-user" value="{{ old('email') }}" required>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Mot de passe">

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password_confirmation" id="password_confirmation" placeholder="Répétez le mot de passe">

                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Créer un compte
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="password" href="password">Mot de passe oublié ?</a>
                            </div>
                            <div class="text-center">
                                <a class="login" href="login">Vous avez déjà un compte ? Connectez-vous !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts de base de Bootstrap-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin de base jQuery-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Scripts personnalisés pour toutes les pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
