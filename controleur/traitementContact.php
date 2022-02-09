<?php

// recuperation des variables

    $addContactEmail=$_POST["addContactEmail"];
    $emailUser=$_POST["emailUser"];

		include '../modele/ContactDAO.php'; // fichier externe contenant les fonctions d'accès à la base de données
		$nb_lignes=ContactDAO::insere_contact($emailUser, $addContactEmail); // appel de fonction d'insertion (couche Modele)
		header("Location:contact.php?nb=$nb_lignes"); // page de confirmation
		exit(); // interruption après redirection
		
	
?>
	
