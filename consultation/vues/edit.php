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
                                        <li class="breadcrumb-item"><a href="./"><i class="zmdi zmdi-folder"></i> Consultation</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><i class="zmdi zmdi-folder"></i> Modification</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">Modification d'une consultation</h3>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                    </div> -->
                                    <div class="card-body card-block">
                                        <form action="./?action=editsend" method="post" class="">
                                            <div class="row">
                                                <!-- infos patient -->
                                                <br>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12"><h3 class="text-center">Informations du Patient</h3></div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Nom du Patient</label>
                                                                <input required type="text" id="nf-email" name="nom" value="<?= $consultation['nom'] ?>" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Prénom(s) du Patient</label>
                                                                <input required type="text" id="nf-email" name="prenom" value="<?= $consultation['prenoms'] ?>" class="form-control">
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Age du Patient</label>
                                                                <input required type="number" id="nf-email" name="age" value="<?= $consultation['age'] ?>" class="form-control">
                                                            </div>
                                                        </div>  
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Sexe du Patient</label>
                                                                <select required name="sexe" class="form-control">
                                                                    <?php if ($consultation['sexe'] == 'm' or $consultation['sexe']=='M') {
                                                                        # code...
                                                                        ?>
                                                                        <option value="M" selected>Masculin</option> <option value="F">Féminin</option>
                                                                        <?php
                                                                    } else {
                                                                        # code...
                                                                        ?>
                                                                        <option value="F" seelcted>Féminin</option> <option value="M">Masculin</option>
                                                                        <?php
                                                                    }
                                                                     ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Adresse du Patient</label>
                                                                <input required type="text" id="nf-email" name="adresse" value="<?= $consultation['adresse'] ?>"class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- infos secondaires -->
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12"><h3 class="text-center">Informations Secondaires</h3></div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Identifiant du Patient</label>
                                                                <input type="text" name="identifiant" value="<?= $consultation['identifiant_Patient'] ?>" class="form-control">                                                       </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Catégorie du Patient</label>
                                                                <select required name="categorie" class="form-control">
                                                                    <option selected></option>
                                                                    <option>ANAIM</option>
                                                                    <option>CBG</option>
                                                                    <option>P.E.C</option>
                                                                    <option>INDIGENAT</option>

                                                                    <option>Autre</option>
                                                                </select>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Date de Rendez-Vous du client</label>
                                                                <input required type="date" value="<?= $consultation['date_rdv'] ?>" class="form-control" name="rdv">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="nf-email" class=" form-control-label">Médecins Traitants</label>
                                                                <select required name="medecin" class="form-control">
                                                                    <option selected></option>
                                                                    <?php foreach ($medecins as $key => $medecin) {
                                                                        # code...
                                                                    ?>
                                                                        <option value="<?= $medecin['id_Medecin']?>"><?= $medecin['nomMedecin'].' '.$medecin['prenomsMedecin'] ?></option>
                                                                    <?php
                                                                    } ?>
                                                                </select>                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                    
                                                                                             
                                            </div>   
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">Recommandations du médecin</h3>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6 offset-3">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Type d'indication du médecin</label>
                                                        <select required name="indication" class="form-control">
                                                            <option selected></option>
                                                            <?php foreach ($indications as $key => $indication) {
                                                                        # code...
                                                            ?>
                                                                <option value="<?= $indication['id_Indication']?>"><?= $indication['libelle_Indication'] ?></option>    
                                                            <?php
                                                            ?>
                                                            <?php
                                                            } ?>
                                                        </select>                                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="text-center">Autres Informations</h3>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Nombre de Séance(s)</label>
                                                        <input required type="number" value="<?= $consultation['nombre_Seance'] ?>" class="form-control" name="seance">
                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Prix par Séance</label>
                                                        <input required type="number" value="<?= $consultation['prix_Seance'] ?>" class="form-control" name="prix" placeholder="EX: 250.000 GNF">                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nf-email" class=" form-control-label">Faire un commentaire (optionel)</label>
                                                        <textarea name="comment" value="<?= $consultation['commentaire'] ?>" class="form-control" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" name="id" value="<?= $consultation['id_Consultation'] ?>" hidden>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-lg">
                                                    <i class="fa fa-dot-circle-o"></i> Enregistrer
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-lg">
                                                    <i class="fa fa-ban"></i> <a href="./?action=reset" style="color: white;">Annuler</a>
                                                </button>
                                            </div>
                                                                                     
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
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
