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
         $compta = $requete->getInfoCompta();

         $mois = array(
            "1"=>"Janvier",
            "2"=>"Février",
            "3"=>"Mars",
            "4"=>"Avril",
            "5"=>"Mai",
            "6"=>"Juin",
            "7"=>"Juillet",
            "8"=>"Aout",
            "9"=>"Septembre",
            "10"=>"Octobre",
            "11"=>"Novembre",
            "12"=>"Décembre"
             
         );
        //  var_dump($compta); exit();
        // foreach ($compta as $key => $value) {
        //     # code...
        //     echo $value['mois'].' prix '.$value['total'].'<br>';
        // }
        // exit();
        $users=$requete->getUsers();
        $revenu = $requete->getRevenu(date('Y'));
        $revenu=number_format($revenu[0]['total']);

        $semaine = $requete->getConsultationSemaine(date('Y-m-d'));

         require 'vues/1.php';
     } else {
         # code...
        
         
     }
     