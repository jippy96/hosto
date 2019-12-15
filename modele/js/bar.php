<?php
    

    require '../../modele/connexion.php';
    require '../../modele/requetes.php';

     $requete = new Requetes(HOSTNAME,BASENAME,USERNAME,PASSWORD);
    $annee = date('Y');
     $mois = $requete->getMoisConsultation($annee);
    $stats = [];

    // var_dump($mois); exit();
     foreach ($mois as $key => $value) {
         # code...
        //  pour chaque mois on chaque mois
        $nombre = $requete->getStatConsultation($value['mois'])[0];
        if ($value['mois']==1) {
            # code...
            // jan
            $stats[]=array(
                "Jan",$nombre['nombre']
            );
        }elseif ($value['mois']==2) {
            # code...
            $stats[]=array(
                "Fev",$nombre['nombre']
            );
        }elseif ($value['mois']==3) {
            # code...
            $stats[]=array(
                "Mars",$nombre['nombre']
            );
        }elseif ($value['mois']==4) {
            # code...
            $stats[]=array(
                "Avr",$nombre['nombre']
            );
        }elseif ($value['mois']==5) {
            # code...
            $stats[]=array(
                "Mai",$nombre['nombre']
            );
        }elseif ($value['mois']==6) {
            # code...
            $stats[]=array(
                "Juin",$nombre['nombre']
            );
        }elseif ($value['mois']==7) {
            # code...
            $stats[]=array(
                "Juil",$nombre['nombre']
            );
        }elseif ($value['mois']==8) {
            # code...
            $stats[]=array(
                "Aout",$nombre['nombre']
            );
        }elseif ($value['mois']==9) {
            # code...
            $stats[]=array(
                "Sept",$nombre['nombre']
            );
        }elseif ($value['mois']==10) {
            # code...
            $stats[]=array(
                "Oct",$nombre['nombre']
            );
        }elseif ($value['mois']==11) {
            # code...
            $stats[]=array(
                "Nov",$nombre['nombre']
            );
        }elseif ($value['mois']==12) {
            # code...
            $stats[]=array(
                "Déc",$nombre['nombre']
            );
        } else {
            # code...
            
        }
        
        // $stats []= array(
        //     $value['mois'],$nombre['nombre']
        // );
     }

    // $stats = $requete->getStatConsultation($mois[1]['mois']);
     echo json_encode($stats);