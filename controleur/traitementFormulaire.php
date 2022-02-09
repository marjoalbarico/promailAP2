<?php

// recuperation des variables du formulaire 
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date=$_POST["date"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$Cpwd=$_POST["Cpwd"];


// Vérification des champs (s'ils ne sont pas vides )
if( $pwd != $Cpwd){
	$message_erreur="Le mot de passe n'est pas identique. Veuillez recommencer.";

		// redirection vers la page formulaire
		header("Location: ../vue/formulaireSignUp.php?erreur=$message_erreur");
		exit(); // interruption après redirection
}else {

		include '../modele/UserDAO.php'; // fichier externe contenant les fonctions d'accès à la base de données

		$nb_lignes=UserDAO::insere_users($email, $nom, $prenom, $date, $phone, $pwd); // appel de fonction d'insertion (couche Modele)
		
		header("Location:../index.php?nb=$nb_lignes"); // page de confirmation
		exit(); // interruption après redirection
		
} // fin if 
	
	?>
	
