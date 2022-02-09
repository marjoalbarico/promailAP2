<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["seconnecter"] = "seconnecter.php";
    $lesActions["sedeconnecter"] = "deconnecter.php";
    $lesActions["sinscrire"] = "traitementFormulaire.php";

    //affichages
    $lesActions["profilUser"] = "profilUser.php";
    $lesActions["boiteDeRecep"] = "boiteDeRecep.php";
    $lesActions["contact"] = "contact.php";
    $lesActions["nouveauMess"] = "nouveauMess.php";
    $lesActions["updateUser"] = "updateUser.php";

    //traitements
    $lesActions["contactSupprimer"] = "contactSupprimer.php";
    $lesActions["messEnvoyes"] = "messEnvoyes.php";
    $lesActions["ajoutContact"] = "traitementContact.php";
    $lesActions["traitementMessage"] = "traitementMessage.php";
    $lesActions["traitementUpdateUser"] = "traitementUpdateUser.php";


}

?>