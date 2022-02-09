<?php
include_once "../modele/authentification.inc.php";
include '../modele/UserDAO.php';

if (isset($_POST["emailpwd"]) && isset($_POST["pwd"])){
    $emailpwd=$_POST["emailpwd"];
    $pwd=$_POST["pwd"];
    $nb_lignes=UserDAO::upd_pwd($pwd, $emailpwd); 
}

if (isset($_POST["emailtelpor"]) && isset($_POST["telPor"])){
    $emailtelpor=$_POST["emailtelpor"];
    $telPor=$_POST["telPor"];
    $nb_lignes=UserDAO::upd_telPor($telPor, $emailtelpor);
}

if (isset($_POST["emaildate"]) && isset($_POST["date"])){
    $emaildate=$_POST["emaildate"];
    $date=$_POST["date"];
    $nb_lignes=UserDAO::upd_dateNaiss($date, $emaildate); 
}
	
if (isLoggedOn()){
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
	
