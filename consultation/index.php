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
        if ($_GET['action']=='create') {
            # code...
            $medecins = $requete->getMedecins();
            $indications = $requete->getIndications();

            require 'vues/create.php';
       
        }elseif ($_GET['action']=='send') { // formulaire de creation d'une consultation a été soumis
            # code...
            // var_dump($_POST);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $sexe = htmlspecialchars($_POST['sexe']);
            $age = htmlspecialchars($_POST['age']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $idMedecin = htmlspecialchars($_POST['medecin']);
            $idIndication = htmlspecialchars($_POST['indication']);
            $prix = htmlspecialchars($_POST['prix']);
            $seance = htmlspecialchars($_POST['seance']);
            $identifiant = htmlspecialchars($_POST['identifiant']);
            $categorie = htmlspecialchars($_POST['categorie']);
            $rdv = htmlspecialchars($_POST['rdv']);
            $comment = htmlspecialchars($_POST['comment']);
            
            $patient = $requete->insertPatient($nom,$prenom,$age,$sexe,$adresse,$idMedecin,$idIndication,$prix,$seance,$identifiant,$categorie,$rdv,$comment);

            // var_dump($patient); exit();

            if ($patient == 'correct') {
                # code...
                // redirection vers la page des consultations
                header('Location: ./?action=setting');
            } else {
                # code...
            }
            
        }elseif ($_GET['action']=='setting') {
            # code...
            $consultations = $requete->getConsultations();
            // var_dump($consultations); exit();
            require 'vues/setting.php';
        }elseif ($_GET['action']=='viewconsultation') {
            # code...
            // $consultation 
            $consultation = htmlspecialchars($_GET['consultation']);
            $consultation = $requete->getConsultation($consultation);

            // var_dump($consultation[0]); exit();
            require 'vues/view.php';
        }elseif ($_GET['action']=='editconsultation') {
            # code...
            $consultation = htmlspecialchars(($_GET['consultation']));
            $consultation = $requete->getConsultation($consultation)[0];
            $medecins = $requete->getMedecins();
            $indications = $requete->getIndications();

            require 'vues/edit.php';

        }elseif ($_GET['action']=='editsend') {
            # code...
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $sexe = htmlspecialchars($_POST['sexe']);
            $age = htmlspecialchars($_POST['age']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $idMedecin = htmlspecialchars($_POST['medecin']);
            $idIndication = htmlspecialchars($_POST['indication']);
            $prix = htmlspecialchars($_POST['prix']);
            $seance = htmlspecialchars($_POST['seance']);
            $identifiant = htmlspecialchars($_POST['identifiant']);
            $categorie = htmlspecialchars($_POST['categorie']);
            $rdv = htmlspecialchars($_POST['rdv']);
            $comment = htmlspecialchars($_POST['comment']);

            $result=$requete->updateConsultation($_POST['id'],$identifiant,$categorie,$comment,$rdv,$prix,$seance,$idMedecin,$idIndication,$nom,$prenom,$age,$sexe,$adresse);

            
            if ($result=="correct") {
                # code...
                header('Location: ./?action=setting');
            } else {
                # code...
            }
            
        } else {
            # code...
        }
        
         
     }
     