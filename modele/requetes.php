<?php

    /*
 * fichier de configuration de requetes vers la base de données
 * @author Philippe Kolama GUILAVOGUI
 * This is a database requests file
 */

Class Requetes
{
    private $base;
    private $hostName;
    private $baseName;
    private $userName;
    private $password;
    // constructeur
    public function __construct($hostName, $baseName, $userName, $password){
    $this->hostName = $hostName;
            $this->baseName = $baseName;
            $this->userName = $userName;
            $this->password = $password;
            $this->connect();
    }
    //méthodes principales
        //connexion à la base de données
        private function connect(){
            try{
                    $this->base = new PDO('mysql:host='.$this->hostName.';dbname='.$this->baseName.';charset=utf8',$this->userName,$this->password);
                    $this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                    echo "Erreur de connexion à la base de données";
            }
        }
       
        //sélecteur
        private function select($req, $params, $methode=PDO::FETCH_NAMED){
            $req = $this->base->prepare($req);
            $req->execute($params);
            return $req->fetchall($methode);
        }
        //inséreur
        private function insert($req, $params){
            try {
                $req = $this->base->prepare($req);
                $req->execute($params);
                return $this->base->lastInsertId();
                }
            catch(Exception $e) {
                exit('Erreur : ' . $e->getMessage());//à modifier pour éviter l'affichage des erreurs
            }
        }
        //updateur
        private function update($req, $params){
                $req = $this->base->prepare($req);
                $req->execute($params);
        }
        //deleteur
        private function delete($req, $params){
                $req = $this->base->prepare($req);
                $req->execute($params);
        }
    //fin méthodes principales
    //méthodes secondaires
        public function authentification($login,$password)//recuperation des donnes de l'utilisateur qui respecte les conditions
        {
            $req = "select id_Users, pseudo, password, nomPrenoms from users where pseudo= :login and password = :mdpass";
            $params = array("login"=>$login, "mdpass"=>$password);
            return $this->select($req,$params);
        }

        // requete d'insertion d'un medecin

        public function insertMedecin($nom,$prenom,$contact){
            $req = 'insert into medecin values(null,:nom,:prenom,:contact)';
            $params = array(
                "nom"=>$nom,
                "prenom"=>$prenom,
                "contact"=>$contact
            );

            return $this->insert($req,$params);
        }

        // requete qui renvoie la liste de tous les medecins
        public function getMedecins(){
            $req = 'select * from medecin order by id_Medecin desc';
            $params = array();

            return $this->select($req,$params);
        }

         // requete qui renvoie un medecin
         public function getMedecin($id){
            $req = 'select * from medecin where id_Medecin=:medecin';
            $params = array("medecin"=>$id);

            return $this->select($req,$params);
        }

        // requete qui met a jour les infos du medecin
        public function updateMedecin($nom,$prenom,$contact,$id){
            $req = 'update medecin set nomMedecin=:nom,prenomsMedecin=:prenom,contact=:contact where id_Medecin=:id';
            $params = array(
                "nom"=>$nom,
                "prenom"=>$prenom,
                "contact"=>$contact,
                "id"=>$id
                
            );

            return $this->update($req,$params);
        }

        // requete qui delete un medecin
        public function deleteMedecin($id){
            $req = 'delete from medecin where id_Medecin=:id';
            $params = array(
                "id"=>$id
            );

            return $this->delete($req,$params);
        }

        // fonction qui insere une nouvelle indication
        public function insertIndication($libelle){
            $req = 'insert into indication values(null,:libelle)';
            $params = array(
                "libelle"=>$libelle
            );

            return $this->insert($req,$params);
        }

         // requete qui renvoie toutes les indications
         public function getIndications(){
            $req = 'select * from indication order by id_Indication desc';
            $params = array();

            return $this->select($req,$params);
        }

         // requete qui renvoie une indication
         public function getIndication($id){
            $req = 'select * from indication where id_Indication=:indication';
            $params = array("indication"=>$id);

            return $this->select($req,$params);
        }

        // requete qui met a jour la table indication
        public function updateIndication($id,$libelle){
            $req='update indication set libelle_Indication=:indication where id_Indication=:id';
            $params = array(
                "indication"=>$libelle,
                "id"=>$id
            );

            return $this->update($req,$params);
        }

        // requete qui msupprime une indication
        public function deleteIndication($id){
            $req='delete from indication where id_Indication=:id';
            $params = array(
                "id"=>$id
            );

            return $this->update($req,$params);
        }

        // REQUETE d'insertion d'un patient
        public function insertPatient($nom,$prenom,$age,$sexe,$adresse,$idMedecin,$idIndication,$prix,$seance,$identifiant,$categorie,$rdv,$comment){
            try {
                //code...
                $this->base->beginTransaction();
                $req='insert into patient values(null,:nom,:prenom,:age,:sexe,:adresse)';
                $params = array(
                    "nom"=>$nom,
                    "prenom"=>$prenom,
                    "age"=>$age,
                    "sexe"=>$sexe,
                    "adresse"=>$adresse
                );

                 $this->insert($req,$params);

                //  je recupere l'id du patient
                $req='select id_Patient from patient order by id_Patient desc limit 1';
                $params = array();

                $idPatient = $this->select($req,$params)[0];
                // var_dump($idPatient);
                // exit();
                $req='insert into consultation values(null,:identifiant,:categorie,:rdv,NOW(),:prix,:seance,:medecin,:patient,:indication,:comment)';
                $params= array(
                    "identifiant"=>$identifiant,
                    "categorie"=>$categorie,
                    "rdv"=>$rdv,
                    "prix"=>$prix,
                    "seance"=>$seance,
                    "medecin"=>$idMedecin,
                    "patient"=>$idPatient['id_Patient'],
                    "indication"=>$idIndication,
                    "comment"=>$comment
                );

                $this->insert($req,$params);

                $this->base->commit();

                return 'correct';

            } catch (\Throwable $th) {
                //throw $th;
                
            }
        }

        public function getConsultations(){
            $req = 'select * from consultation order by id_Consultation desc limit 100';
            $params = array();

            return $this->select($req,$params);
        }

        // fonction qui renvoie une consultation 
        public function getConsultation($id){
            $req = 'select * from consultation inner join patient on patient.id_Patient=consultation.id_Patient
                    inner join indication on indication.id_Indication=consultation.id_Indication
                    inner join medecin on medecin.id_Medecin=consultation.id_Medecin where id_Consultation=:id';
            $params = array(
                "id"=>$id
            );

            return $this->select($req,$params);
        }

        // fonction qui renvoie le nombre de consultation par mois et par categorie

        public function getNombreConsultationByCat($categorie){
            $req='select count(*) nombre from consultation where categorie_Patient=:cat';
            $params=array(
                "cat"=>$categorie
            );

            return $this->select($req,$params)[0];
        }

        public function getMoisConsultation($annee){
            $req="select MONTH(date_Consultation) mois from consultation where YEAR(date_Consultation)=:annee group by MONTH(date_Consultation)";
            $params= array("annee"=>$annee);

            return $this->select($req,$params);
        }

        // retourne le nombre de consultation dans le mois
        public function getStatConsultation($mois){
            $req="select count(*) nombre from consultation where MONTH(date_Consultation)=:mois";
            $params=array(
                "mois"=>$mois
            );

            return $this->select($req,$params);
        }

        // retourne les infos pour la comptabilité
        public function getInfoCompta(){
            $req="select MONTH(date_Consultation) mois, count(*) nombre, sum(prix_seance*nombre_seance) total from consultation 
                 group by MONTH(date_Consultation)";
            $params = array();

            return $this->select($req,$params);
        }

        // requete qui retourne le nombre de users
        public function getUsers(){
            $req= 'select count(*) users from users';
            $params = array();

            return $this->select($req,$params);
        }

        // retourne le nombre de dossiers dans la semaine
        public function getConsultationSemaine($date){
            $req="select count(*) semaine from consultation where DATEDIFF(:date,date_Consultation)<=7 ";
            $params=array(
                "date"=>$date
            );

            return $this->select($req,$params);
        }

    // retourne le revenue annuel

    public function getRevenu($annee){
        $req="select sum(prix_seance*nombre_seance) total from consultation where YEAR(date_Consultation)=:annee";
        $params = array(
            "annee"=>$annee
        );

        return $this->select($req,$params);
    }

    // met a jour une consultation

    public function updateConsultation($id,$identifiant,$categorie,$comment,$date,$prix,$seance,$idMedecin,$idIndication,$nom,$prenom,$age,$sexe,$adresse){
        try {
            $this->base->beginTransaction();

            $req ='update consultation set identifiant_Patient=:identifiant, categorie_Patient=:categorie,date_rdv=:rdv,prix_Seance=:prix,
                    nombre_Seance=:seance,id_Medecin=:medecin,id_Indication=:indication,commentaire=:comment where id_Consultation=:consultation';
            $params = array(
                "identifiant"=>$identifiant,
                "categorie"=>$categorie,
                "rdv"=>$date,
                "prix"=>$prix,
                "seance"=>$seance,
                "medecin"=>$idMedecin,
                "indication"=>$idIndication,
                "consultation"=>$id,
                "comment"=>$comment
            );
            $this->update($req,$params);

            $req = "select id_Patient from consultation where id_Consultation =:id";
            $params = array("id"=>$id);

            $consultation = $this->select($req,$params);

            // var_dump($consultation); exit();
            // maj de la table patient
            $req = "update patient set nom=:nom, prenoms=:prenom, age=:age, sexe=:sexe, adresse=:adresse where id_Patient=:patient";
            $params= array(
                "nom"=>$nom,
                "prenom"=>$prenom,
                "age"=>$age,
                "sexe"=>$sexe,
                "adresse"=>$adresse,
                "patient"=>$consultation[0]['id_Patient']
            );

            $this->update($req,$params);

            $this->base->commit();

            return 'correct';

        } catch (\Throwable $th) {
            //throw $th;
            return $th;
        }
    }

    public function insertUser($nom,$pass,$prenom){
        $req="insert into users values(null,:nom,:pass,:prenom)";
        $params = array(
            "nom"=>$nom,
            "pass"=>$pass,
            "prenom"=>$prenom
        );

        return $this->insert($req,$params);
    }
}

?>