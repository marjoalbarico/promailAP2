<?php
include_once "Contact.php";
class ContactDao{

        //creation objet contact
    public static function createContactObj(){
        include_once "config.php";
        try{
            $cnx=connexionPDO();
            $req = $cnx->prepare("select * from contact");
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

    public static function getContactsByUser($emailUser) {

        include_once "config.php";
    
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select nom, prenom, email from contact join posseder on contact.email=posseder.emailContact WHERE posseder.emailUser=:emailUser;");
            $req->bindValue(':emailUser', $emailUser, PDO::PARAM_STR);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    
    public static function getAllContacts(){
        include_once "config.php";
        $resultat = array();
    
        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from contact;");
            $req->bindValue(':emailUser', $emailUser, PDO::PARAM_STR);
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    
    
    public static function deleteContactByEmail($emailUser,$emailContact){
        include_once "config.php";
        $resultat = -1;
        try {
            $cnx = connexionPDO();
    
            $req = $cnx->prepare("delete from posseder where emailUser=:emailUser and emailContact=:emailContact");
            $req->bindValue(':emailUser', $emailUser, PDO::PARAM_STR);
            $req->bindValue(':emailContact', $emailContact, PDO::PARAM_STR);
            
            $resultat = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }
    
    public static function insere_contact($emailUser, $addContactEmail){
        include 'bd.inc.php'; 
        $nb_lignes=0;
        
        $requete= "INSERT INTO posseder (emailContact, emailUser) VALUES ('$addContactEmail', '$emailUser');";
    
        $reponse_bdd=mysqli_query($lien_base, "$requete");
        
        if($reponse_bdd == false) {	
            $message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
            echo $message_erreur;
            die(); 
        }
        else{
            $nb_lignes=mysqli_affected_rows($lien_base);
            createContactObj();
        }
        return $nb_lignes ;
    } 
}

?>