<?php

// recuperation des variables
$sendto=$_POST["sendto"];
$objet=$_POST["objet"];
$mess=$_POST["mess"];
$exp=$_POST["exp"];

//verifsi email existe

		include '../modele/MessageDAO.php'; // fichier externe contenant les fonctions d'accès à la base de données
		$nb_lignes=MessageDAO::insere_mess($objet, $mess, $sendto, $exp); // appel de fonction d'insertion (couche Modele)
		header("Location:nouveauMess.php?nb=$nb_lignes"); // page de confirmation
		exit(); // interruption après redirection
		
// fin if 
?>
	
