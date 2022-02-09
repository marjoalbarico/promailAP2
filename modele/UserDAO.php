<?php

include_once "User.php";

class UserDAO{
    //creation objet User
    public static function createUserObj(){
        include_once "config.php";
        try{
            $cnx=connexionPDO();
            $req = $cnx->prepare("select * from users");
            $req->execute();

            $ligne = $req->fetch(PDO::FETCH_ASSOC);

            while($ligne){
                $resultat[]=new User($ligne["email"], $ligne["nom"], $ligne["prenom"], $ligne["dateNaissance"], $ligne["telephonePortable"], $ligne["pwd"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        }catch (PDOException $e){
            print "Erreur! : ".$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getNomUser($email) {

        include_once "config.php";
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select nom from users where email=:email");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->execute();
            
            $resultat = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function insere_users($email, $nom, $prenom, $date, $phone, $pwd) { // insere le texte dans la base de données
        include 'bd.inc.php'; // fichier des paramètres de connexion qui donne $lien_base
        $nb_lignes=0; 					// initialisation de la variable à zéro
        
        // Requete d'insertion MYSQL. 
        $requete= "INSERT INTO users (email, nom, prenom, dateNaissance, telephonePortable, pwd) VALUES ('$email', '$nom', '$prenom', '$date', '$phone', '$pwd');";
        
        // tentative d'execution de la requete INSERT dans la base
        $reponse_bdd=mysqli_query($lien_base, "$requete");
        
        if($reponse_bdd == false){ // si false : impossible d'exécuter la requête INSERT
            $message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
            echo $message_erreur;
            die(); // arrêt après erreur
        }else{ // insert réussi
            $nb_lignes=mysqli_affected_rows($lien_base); // compte le nombre de lignes affectées (normalement 1 ligne insérée)
            createUserObj();
        }
        return $nb_lignes ; // renvoie le nb de lignes insérées : normalement 1
    }

    //functions Update

    //update mot de passe
    public static function upd_pwd($pwd, $email) {
        include_once "config.php";
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE users SET pwd=:pwd' WHERE email=:email;");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':pwd', $pwd, PDO::PARAM_STR);
            $req->execute();

            return 1;
    
    } 
    
    //update numero portable
    public static function upd_telPor($telPor, $email) {
        include_once "config.php";
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE users SET telephonePortable=:telPor WHERE email=:email;");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':telPor', $telPor, PDO::PARAM_INT);
            $req->execute();

            return 1;
        
    } 

    //uodate date de naissance
    public static function upd_dateNaiss($date, $email) {
        include_once "config.php";
            $cnx = connexionPDO();
            $req = $cnx->prepare("UPDATE users SET dateNaissance=:date WHERE email=:email;");
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->bindValue(':date', $date, PDO::PARAM_STR);
            $req->execute();

            return 1;
    }

    
}

?>