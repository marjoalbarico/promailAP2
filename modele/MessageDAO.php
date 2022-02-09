<?php
include_once "Message.php";
class MessageDAO{

        //creation objet Message
    public static function createMessageObj(){
        include_once "config.php";
        try{
            $cnx=connexionPDO();
            $req = $cnx->prepare("select * from message");
            $req->execute();
    
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
    
            while($ligne){
                $resultat[]=new Message($ligne["idMessage"],$ligne["contenu"], $ligne["dateHeureMessage"], $ligne["objet"],  $ligne["emailContact"], $ligne["emailUser"]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
        }catch (PDOException $e){
            print "Erreur! : ".$e->getMessage();
            die();
        }
        return $resultat;
    }

    public static function getMessagesSentByUser($emailUser) {

        include_once "config.php";

        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * from message where emailUser=:emailUser;");
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

    public static function getMessagesReceivedByUser($emailUser) {

        include_once "config.php";
        
        $resultat = array();

        try {
            $cnx = connexionPDO();
            $req = $cnx->prepare("select * 
                                from message, envoyer, contact 
                                WHERE envoyer.idMessage=message.idMessage 
                                and contact.email=envoyer.emailContact 
                                and message.emailUser=:emailUser;");
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

    public static function insere_mess($objet, $mess, $sendto, $exp){
        include 'bd.inc.php'; 
        $nb_lignes=0;

        $requete= "INSERT INTO message (objet, contenu, emailContact, emailUser) VALUES ('$objet', '$mess', '$sendto', '$exp');";

        $reponse_bdd=mysqli_query($lien_base, "$requete");
        
        if($reponse_bdd == false) {	
            $message_erreur="Impossible d'executer la requete: $requete " . mysqli_error($lien_base);
            echo $message_erreur;
            die(); 
        }
        else{
            $nb_lignes=mysqli_affected_rows($lien_base);
            createMessageObj();
        }
        return $nb_lignes ; 
    } 

}
 
?>