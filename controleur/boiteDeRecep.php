<?php

include_once "../modele/authentification.inc.php";
include_once "../modele/MessageDAO.php";


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $user = getUtilisateurByemail($email);

    $messages= MessageDAO::getMessagesReceivedByUser($email);

    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Nouveau Message";
    include "../vue/header.html.php";
    include "../vue/sidemenu.php";
    include "../vue/listeMessage.php";
    include "../vue/footer.html.php";
}
else{
    $titre = "Nouveau message";
    include "../vue/header.html.php";
    include "../vue/footer.html.php";
}

?>