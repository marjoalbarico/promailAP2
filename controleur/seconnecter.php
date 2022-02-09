<?php

include_once "../modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["email"]) && isset($_POST["pwd"])){
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
}
else
{
    $email="";
    $pwd="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
login($email,$pwd);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur profilUser
    include "../controleur/profilUser.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "authentification";
    include "../vue/error.php";
}


?>