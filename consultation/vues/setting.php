<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <!-- My own CSS -->
    <link href="../css/style.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <?php require '../global/menuTop.php' ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">

        <?php require '../global/menuSide.php' ?>

            <!-- MAIN CONTENT-->
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="margin-left: -10px;">
                                <nav aria-label="breadcrumb" >
                                    <ol class="breadcrumb" style="background-color: white;">
                                        <li class="breadcrumb-item"><a href="../?road=accueil" title="Revenir au tableau de bord"><i class="zmdi zmdi-home"></i> Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><i class="zmdi zmdi-folder"></i> Consultation</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Liste des 100 dernières Consultations</h3>
                               
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>                                                
                                            <th>Identifiant du Patient</th>                                           
                                            <th>Catégorie du Patient</th>                                           
                                            <th>Date de Consultation</th>                                           
                                            <th>Nombre de Séance(s)</th>                                           
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($consultations as $key => $consultation) {
                                                    # code...
                                            ?>
                                            <tr class="tr-shadow">
                                                
                                                <td><?= $consultation['identifiant_Patient'] ?></td>
                                                <td><?= $consultation['categorie_Patient'] ?></td>
                                                <td><?= $consultation['date_Consultation'] ?></td>
                                                <td><?= $consultation['nombre_Seance'] ?></td>

                                                <td>
                                                    <div class="table-data-feature">
                                                        
                                                        <a href="./?action=editconsultation&consultation=<?= $consultation['id_Consultation'] ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Editer">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        
                                                        <a href="./?action=viewconsultation&consultation=<?= $consultation['id_Consultation'] ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Voir Plus">
                                                                <i class="zmdi zmdi-more"></i>
                                                            </button>
                                                        </a>                                                      
                                                    </div>
                                                </td>
                                            </tr>   
                                            <tr class="spacer"></tr>

                                            <?php
                                                }
                                            ?>                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                                <?php require '../global/footer.php' ?>
                            </div>
                        </div>
                    
                    </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
