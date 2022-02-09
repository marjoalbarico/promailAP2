<?php

include_once "../modele/authentification.inc.php";
include_once "../modele/ContactDAO.php";

if (isset($_POST["emailContactDelete"]) && isset($_POST["emailUser"])){
    $emailContactDelete=$_POST["emailContactDelete"];
    $emailUser=$_POST["emailUser"];
}
else{
    $emailContactDelete="";
    $emailUser="";
}

ContactDAO::deleteContactByEmail($email,$emailContactDelete);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $user = getUtilisateurByemail($email);
    $contacts = ContactDAO::getContactsByUser($email);

    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Contact";
}
else{
    $titre = "Contact";
    include "../vue/header.html.php";
    include "../vue/footer.html.php";
}

?>