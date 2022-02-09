<?php

include_once "../modele/authentification.inc.php";
include_once "../modele/ContactDAO.php";


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $user = getUtilisateurByemail($email);
    $contacts = ContactDAO::getContactsByUser($email);

    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Contact";
    include "../vue/header.html.php";
    include "../vue/contact.php";
    include "../vue/footer.html.php";
}
else{
    $titre = "Contact";
    include "../vue/header.html.php";
    include "../vue/error.php";
    include "../vue/footer.html.php";
}

?>