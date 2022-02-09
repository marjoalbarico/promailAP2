<?php

include_once "config.php";

function getUtilisateurByemail($email) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from users where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function login($email, $pwd) {
    if (!isset($_SESSION)) {
        session_start();

    }

    $user = getUtilisateurByemail($email);
    $mdpBD = $user["pwd"];

    if (trim($mdpBD) == trim($pwd)) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["email"] = $email;
        $_SESSION["pwd"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["email"]);
    unset($_SESSION["pwd"]);
}

function getemailLoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["email"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["email"])) {
        $user = getUtilisateurByemail($_SESSION["email"]);
        if ($user["email"] == $_SESSION["email"] && $user["pwd"] == $_SESSION["pwd"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

?>