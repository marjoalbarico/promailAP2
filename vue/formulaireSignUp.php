<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProMail - INSCRIPTION</title>
    <link href="../css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
	    <h1 class="logoname">P R O M A I L</h1>
        <a href="../index.php"><img src="../img/mail.png" class="logo"></a>

      <div class="logInSignUp">
        <h1 class="hOne">Créer un compte</h1>
        <form action="../controleur/traitementFormulaire.php" method="post">
          <label for="nom">Nom :</label>
		      <input type="text" id="nom" name="nom" class="textesaisi" style="text-transform:uppercase" placeholder="NOM" required>

          <label for="prenom">Prenom :</label>
		      <input type="text" id="prenom" name="prenom" class="textesaisi" style="text-transform: capitalize;" required>

          <label for="date">Date de naissance :</label>
		      <input type="date" id="date" name="date" class="textesaisi" required>

          <label for="phone">Téléphone portable :</label>
          <input type="tel" id="phone" name="phone" class="textesaisi" placeholder="0123456789" pattern="[0-9]{10}" required>

		      <label for="email">Identifiant :</label>
		      <input type="text" id="email" name="email" placeholder="mail@promail.com" class="textesaisi" pattern=".+@promail.com" required>

		      <label for="pwd">Mot de passe :</label>
		      <input type="password" id="pwd" name="pwd" minlength="8" placeholder="8 caractères minimum" class="textesaisi" id="password" required>
            
          <label for="Cpwd">Confirmation de mot de passe :</label>
		      <input type="password" id="Cpwd" name="Cpwd" minlength="8" placeholder="8 caractères minimum" class="textesaisi" id="password_confirm" required><br>

		      <input type="submit" value="S'INSCRIRE" class="submitButton">
		    </form>  
      </div>

      <h1 class="hOne"> Pour connecter dans votre compte, </h1>
      <a href="../index.php" class="cliquezici">Cliquez ici</a>
      <br>
  </body>
</html>