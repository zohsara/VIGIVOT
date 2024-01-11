<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VIGIVOT</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- DataTables JavaScript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
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
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables de la liste des demandes</h1>
    
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NON</th>
                                                <th>PRENOM</th>
                                                <th>ADRESSE</th>
                                                <th>TELEPHONE</th>
                                                <th>DATE DE DEBUT</th>
                                                <th>DATE DE FIN</th>
                                                <th>VALIDER LA DEMANDE</th>
                                                <th>ANNULER LA DEMANDE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($demande as $user)
                                            <tr>
                                                <td>{{ $user->nom }}</td>
                                                <td>{{ $user->prenom }}</td>
                                                <td>{{ $user->adresse }}</td>
                                                <td>{{ $user->telephone }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>
                                                <td><button class="btn btn-success">Valider la demande</button></td>
                                                <td><button class="btn btn-danger">Annuler</button></td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Aucune demande disponible.</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
    
                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
                <!-- /.container-fluid -->

            </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          

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
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "paging": true,         // Enable pagination
            "searching": true,      // Enable search
            "info": true,           // Show info (e.g., "Showing 1 to 10 of 20 entries")
            "responsive": true      // Make the table responsive
        });
    });
</script>

</body>

</html>
