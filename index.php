<?php
    /**
     * @Controlleur frontal de l'application
     * Il assure la redirection entre chaque bundle de l'appli
     */

     if (empty($_GET['road'])) { // si aucune route n'est spcécifiée on redirrige vers l'authentiification
         # code...
        header('Location: login/');
     } else {
         # code...
         if (isset($_GET['road']) && $_GET['road']=='accueil') {
             # code...
             header('Location: 1/');
         }elseif (isset($_GET['road']) && $_GET['road']=='consultation') {
             # code...
             header('Location: consultation/');
         }elseif (isset($_GET['road']) && $_GET['road']=='gestion') {
             # code...
             header('Location: gestion/');
         } else {
             # code...

         }
         
     }
     