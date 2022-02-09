
<div class="updatebox">
    <!--AFFICHE LES DETAILS D'UTILISATEUR-->
    <h1 class="someTitle">PROFIL :</h1>
    <h1 class="detailsUser">
        <?=$user['nom'] ?>, <?=$user['prenom'] ?> <br>
        <?=$user['email']?><br>
        Date de naissance : <?=$user['dateNaissance'] ?> <br>
        Numéro portable : <?=$user['telephonePortable'] ?>
    </h1>
        <!--MODIFIER MOT DE PASSE-->
    <form action="../controleur/traitementUpdateUser.php" method="POST">
		<input type="hidden" name="emailpwd" value="<?=$user['email']?>">

        <label for="pwd" class="uptext">Nouveau mot de passe :</label>
		<input type="password" id="pwd" name="pwd" minlength="8" placeholder="8 caractères minimum" class="upBox" id="password">

        <input type="submit" value="MODIFIER MOT DE PASSE" class="sendbutton">
    </form>
    <br>
        <!--MODIFIER TELEPHONE PORTABLE-->
    <form action="../controleur/traitementUpdateUser.php" method="POST">
        <input type="hidden" name="emailtelpor" value="<?=$user['email']?>">
            
        <label for="telPor" class="uptext">Nouveau numéro portable :</label>
        <input type="text" id="telPor" name="telPor" class="upBox" placeholder="0123456789" pattern="[0-9]{10}">

        <input type="submit" value="MODIFIER NUMÉRO PORTABLE" class="sendbutton">
    </form>
    <br>
        <!--MODIFIER DATE DE NAISSANCE-->
    <form action="../controleur/traitementUpdateUser.php" method="POST">
        <input type="hidden" name="emaildate" value="<?=$user['email']?>">

        <label for="date" class="uptext">Corriger date de naissance :</label>
		<input type="date" id="date" name="date" class="upBox">
        
        <input type="submit" value="MODIFIER DATE DE NAISSANCE" class="sendbutton">
    </form>
</div>