<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
        include_once('navbar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               
                    <?php 
        include_once('appbar.php');
        ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Ajoutez ce code à l'intérieur de votre balise body -->
<div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qrCodeModalLabel">Générer le QR Code en PDF</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Ajoutez ici le contenu de votre modal -->
                {{ $qrcode }}
                <!-- Par exemple, un formulaire pour générer le QR Code en PDF -->
                <form>
                    <!-- Vos champs et éléments ici -->
                    <button type="button" class="btn btn-primary">Générer PDF</button>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            Acheter des QR codes sécurisés
        </button>
        <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#qrCodeModal">
            Générer le QR Code en PDF
        </button>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo3">
            Générer les QR Codes achetés en PDF
        </button>
    </div>
</div>


                
                
                <!-- Begin Page Content -->
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h3 class="text-center mb-4">Formulaire de demande de QR code</h3>
                            <p class="text-center">Après avoir saisi vos informations, veuillez envoyer votre demande.</p>
                
                            <form action="/action_page.php" class="was-validated">
                                <div class="mb-3">
                                    <label for="motif" class="form-label">Motif :</label>
                                    <select class="form-select" id="motif" name="motif" required>
                                        <option value="" selected disabled>Sélectionnez le motif</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                    <div class="valid-feedback">Valide.</div>
                                    <div class="invalid-feedback">Veuillez sélectionner un motif.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="cni" class="form-label">N°CNI:</label>
                                    <input type="text" class="form-control" id="cni" placeholder="Entrez votre N°CNI (chiffres uniquement)" name="cni" pattern="\d{10}" title="Veuillez entrer 10 chiffres" oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10)" required>
                                    <div class="valid-feedback">Valide.</div>
                                    <div class="invalid-feedback">Veuillez remplir ce champ avec 10 chiffres.</div>
                                </div>                              
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Mot de passe :</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pswd" required>
                                    <div class="valid-feedback">Valide.</div>
                                    <div class="invalid-feedback">Veuillez remplir ce champ.</div>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                                    <label class="form-check-label" for="myCheck">J'accepte les conditions</label>
                                    <div class="valid-feedback">Valide.</div>
                                    <div class="invalid-feedback">Cochez cette case pour continuer.</div>
                                    <a href="#">Condition et terme d'utilisation! </a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                </div>
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <div class="offcanvas offcanvas-end" id="demo">
                <div class="offcanvas-header text-center">
                    <h1 class="offcanvas-title">Acheter des QR code</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <form>
                        <div class="mb-3">
                            <label for="quantite" class="form-label">Quantité :</label>
                            <input type="number" class="form-control" id="quantite" placeholder="Entrez la quantité" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label for="total" class="form-label">Somme totale :</label>
                            <input type="text" class="form-control" id="total" readonly>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Acheter</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
  
    <?php 
    include_once('modal.php');
    ?>

    <?php 
include_once('footer.php');
?>

<script>
    // Mettre à jour la somme totale lors de la saisie de la quantité
    document.getElementById('quantite').addEventListener('input', updateTotal);

    function updateTotal() {
        var quantite = parseInt(document.getElementById('quantite').value) || 0;
        var total = quantite * 1000; // Multiplier par 1000
        document.getElementById('total').value = total.toLocaleString('fr-FR', { style: 'currency', currency: 'XOF' });
    }
</script>
</body>

</html>