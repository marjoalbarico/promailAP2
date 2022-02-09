<?php

include_once "../modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $user = getUtilisateurByemail($email);


    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Boîte de réception";
    include "../vue/header.html.php";
    include "../vue/sidemenu.php";
    include "../vue/footer.html.php";
}
else{
    $titre = "Boîte de réception";
    include "../vue/header.html.php";
    include "../vue/footer.html.php";
}

?>