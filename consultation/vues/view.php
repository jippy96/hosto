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
                                        <li class="breadcrumb-item"><a href="../?road=manage" title="Revenir au tableau de bord"><i class="zmdi zmdi-home"></i> Accueil</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><i class="zmdi zmdi-folder"></i> Consultation</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="../images/medical.jpg" alt="Card image cap">
                                    <!-- <div class="card-body">
                                        <h4 class="card-title mb-3">Card Image Title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div> -->
                                </div>
                            </div> 
                            <div class="col-md-6">
                                
                                <div class="card">
                                        <div class="card-body">
                                            <h3 class="text-center">Informations du Patient</h3> 
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Nom : <?= $consultation[0]['nom'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Prénom : <?= $consultation[0]['prenoms'] ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Age : <?= $consultation[0]['age'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Sexe : <?= $consultation[0]['sexe'] ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Adresse : <?= $consultation[0]['adresse'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Identifiant : <?= $consultation[0]['identifiant_Patient'] ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="">Catégorie : <?= $consultation[0]['categorie_Patient'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Date Rendez-vous : <?= $consultation[0]['date_rdv'] ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Date Consultation : <?= $consultation[0]['date_Consultation'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Prix Séance : <?= $consultation[0]['prix_Seance'] ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Nom du Médecin : <?= $consultation[0]['nomMedecin'].' '.$consultation[0]['prenomsMedecin'] ?></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Indication de traitement : <?= $consultation[0]['libelle_Indication'] ?></label>
                                                </div>
                                            </div>
                                            <br>
                                            <a href=""><button class="btn btn-secondary btn-lg btn-block">Quitter</button></a>
                                        </div>
                                </div>
                            </div>                           
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
