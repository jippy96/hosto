<?php
    

    require '../../modele/connexion.php';
    require '../../modele/requetes.php';

     $requete = new Requetes(HOSTNAME,BASENAME,USERNAME,PASSWORD);
    
     $number = array();
     $cbg = $requete->getNombreConsultationByCat('CBG');
     $anaim = $requete->getNombreConsultationByCat('ANAIM');
     $pec = $requete->getNombreConsultationByCat('P.E.C');
     $indigenat = $requete->getNombreConsultationByCat('INDIGENAT');
    
    
     $number []=$cbg;
     $number[]=$anaim;
     $number[]=$pec;
     $number[]=$indigenat;

    echo json_encode($number);