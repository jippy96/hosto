<?php
session_start();
    /**
     * controlleur secondaire du bundle de dashboard
     */

    require '../modele/connexion.php';
    require '../modele/requetes.php';

     ob_start();

     $requete = new Requetes(HOSTNAME,BASENAME,USERNAME,PASSWORD);

     if (empty($_GET['action'])) {
         # code...
         require 'vues/1.php';
     } else {
         # code...
        if ($_GET['action']=='ajoutMedecin') {
            # code...
            require 'vues/addMedecin.php';
        }elseif ($_GET['action']=='sendMedecin') {
            # code...
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $contact = htmlspecialchars($_POST['contact']);

            $requete->insertMedecin($nom,$prenom,$contact);

            // redirection vers la liste d'affichage des médecins
            header('Location: ./?action=allMedecin');
            // var_dump($_POST);
        }elseif ($_GET['action']=='allMedecin') {
            # code...
            $medecins = $requete->getMedecins();
            require 'vues/medecins.php';

        }elseif ($_GET['action']=='edit') { // pour l'edition d'un medecin
            # code...
            $id_Medecin = htmlspecialchars($_GET['medecin']);

            $medecin = $requete->getMedecin($id_Medecin);
            if (empty($medecin)) {
                # code...
                echo '404'; exit();
            } else {
                # code...
                require 'vues/editMedecin.php';

            }            
        }elseif ($_GET['action']=='sendMedecinEdited') { //enregistrement des modifications du medecins
            # code...
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $contact = htmlspecialchars($_POST['contact']);
            $requete->updateMedecin($nom,$prenom,$contact,$_POST['id']);

            header('Location: ./?action=allMedecin');


        }elseif ($_GET['action']=='delete') {
            # code...
            $id_Medecin = htmlspecialchars($_GET['medecin']);
            $requete->deleteMedecin($id_Medecin);

            header('Location: ./?action=allMedecin');

        }elseif ($_GET['action']=='ajoutIndication') {
            # code...
            require 'vues/addIndication.php';
        }elseif ($_GET['action']=='sendIndication') {
            # code...
            $requete->insertIndication(htmlspecialchars($_POST['indication']));
            header('Location: ./?action=allIndication');
        }elseif ($_GET['action']=='allIndication') {
            # code...
            $indications = $requete->getIndications();

            require 'vues/allIndication.php';
        }elseif ($_GET['action']=='editIndication') {
            # code...
            $id_Indication = htmlspecialchars($_GET['indication']);

            $indication = $requete->getIndication($id_Indication);

            require 'vues/editIndication.php';

        }elseif ($_GET['action']=='sendIndicationEdited') {
            # code...
            // var_dump($_POST);
            $requete->updateIndication(htmlspecialchars($_POST['id']),htmlspecialchars($_POST['indication']));

            header('Location: ./?action=allIndication');
        }elseif ($_GET['action']=='deleteIndication') {
            # code...
            $id = htmlspecialchars($_GET['indication']);
            $requete->deleteIndication($id);
            header('Location: ./?action=allIndication');

        } else {
            # code...
        }
        
         
     }
     