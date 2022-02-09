<?php

include_once "../modele/authentification.inc.php";


logout();

                

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Deconnexion";
include "../vue/deconnect.php";

?>