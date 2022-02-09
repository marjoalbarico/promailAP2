<?php

include_once "../modele/authentification.inc.php";
include_once "../modele/UserDAO.php";


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if (isLoggedOn()){
    $email = getemailLoggedOn();
    $user = getUtilisateurByemail($email);


    // appel du script de vue qui permet de gerer l'affichage des donnees
    $titre = "Modifier profil";
    include "../vue/header.html.php";
    include "../vue/updateUser.php";
    include "../vue/footer.html.php";
}
else{
    $titre = "Modifier profil";
    include "../vue/header.html.php";
    include "../vue/footer.html.php";
}

?>