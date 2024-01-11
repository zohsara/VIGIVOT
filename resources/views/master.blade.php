<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        @if($us)
                            <div class="col-md-4">
                                <p><strong>Nom:</strong> {{ $us->nom }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Prénom:</strong> {{ $us->prenom }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>Email:</strong> {{ $us->email }}</p>
                            </div>
                            <!-- Ajoutez d'autres champs en fonction de votre modèle User -->
                        @else
                            <div class="col-md-12">
                                <p>Aucun utilisateur connecté.</p>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Scrutateur actif
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Nombre de Scrutateur </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Votant
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">505</div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Nombre de voix</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
                <!-- /.container-fluid -->
                
               

                    <!-- Area Chart -->
                  
                
            </div>
            <!-- End of Main Content -->

            <div class="row">

                <div class="col-xl-8 col-lg-7">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                            <hr>
                          
                        </div>
                    </div>
                </div>

                <!-- Donut Chart -->
               <!-- Donut Chart -->
<div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="chart-pie pt-4">
                <canvas id="myPieChart"></canvas>
            </div>
            <hr>
            <!-- Ajouter le pourcentage ici -->
            <div class="text-center">
                <div>
                    <span class="badge badge-primary mr-2">65%</span>
                    <span class="badge-text">Scrutateur</span>
                </div>
                <div>
                    <span class="badge badge-success mr-2">25%</span>
                    <span class="badge-text">Candidat</span>
                </div>
                <div>
                    <span class="badge badge-info mr-2">10%</span>
                    <span class="badge-text">votant(s)</span>
                </div>
            </div>
        </div>
    </div>
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

</body>

</html>