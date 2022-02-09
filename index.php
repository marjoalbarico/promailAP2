<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProMail</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
	    <h1 class="logoname">P R O M A I L</h1>
	  	<a href="index.php"><img src="img/mail.png" class="logo"></a>

      <div class="logInSignUp">

            <!--FORM SE CONNECTER-->
        <h1 class="hOne">Accédez à votre email</h1>
        <form action="controleur/seconnecter.php" method="POST">
		    <label for="email">Identifiant :</label>
		    <input type="text" id="email" name="email" placeholder="mail@promail.com" class="textesaisi" pattern=".+@promail.com" required>

		    <label for="mdp">Mot de passe :</label>
		    <input type="password" id="pwd" name="pwd" minlength="8" class="textesaisi" required><br>

		    <input type="submit" value="SE CONNECTER" class="submitButton">
		    </form>
            <!--COMPTE TEST-->
        <h1 class="textcompte">
        TEST -- Email : exemple@promail.com , mdp : exemplee
        </h1>
      </div>

        <h1 class="hOne"> Pour créer un compte, </h1>
        <a href="vue/formulaireSignUp.php" class="cliquezici">Cliquez ici</a>
	    
  </body>
</html>