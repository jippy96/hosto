<?php
session_start();
    /**
     * controlleur secondaire du bundle de login
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
         if ($_GET['action']=='auth') {
            //  # code...
            //  var_dump($_POST);
             $username = htmlspecialchars($_POST['username']);
             $pass = htmlspecialchars($_POST['password']);

            //  echo sha1('jippy');
            //  appel de la methode chargée de verifier l'authetification de l'user

            $user = $requete->authentification($username,sha1($pass));

            if (empty($user)) {
                # code...
                header('Location: ./?erreur=1');
            } else {
                # code...
                $_SESSION['user']=$user[0];
                // var_dump($_SESSION['user']);
                header('Location: ../?road=accueil');
            }
            

         } else {
             # code...
         }
         
     }
     