<h1 class="someTitle">CONTACT(S) :</h1>
<div class="contactSpace">
        <?php for($i=0;$i<count($contacts);$i++){ ?>
            <div class="eachContact">
                <img src="../img/avataricon.png" class="contactAvatar"><br>
                <h1 class="contactDetails"><?= $contacts[$i]["email"] ?> <br>
                <?= $contacts[$i]["nom"]?>, <?= $contacts[$i]["prenom"]?>
                </h1>
            </div>
        <?php } ?>

        <div class="eachContact">
                <img src="../img/deleteContact.jpg" id="addContactPlus">
                <form action="../controleur/contactSupprimer.php" method="post">
                    <label for="emailContactDelete" class="ajouterText">Contact à supprimer :</label>
                        <select id="emailContactDelete" id="emailContactDelete" name="emailContactDelete" class="ajouterTextBox">
                            <?php for($i=0;$i<count($contacts);$i++){ ?>
                            <option value=<?= $contacts[$i]["email"] ?>><?= $contacts[$i]["email"] ?></option>
                            <?php } ?>
                        </select>
                    
                    <label for="emailUser" class="ajouterText">dans le compte de :</label>
                    <select id="emailUser" id="emailUser" name="emailUser" class="ajouterTextBox">
                        <option value=<?=$user['email']?>><?=$user['email']?></option>
                    </select>

                    <input type="submit" value="SUPPRIMER" class="rajouterbutton">
                </form>
        </div>
        
        <div class="eachContact">
                <img src="../img/addContact.png" id="addContactPlus">
                <form action="../controleur/traitementContact.php" method="post">
                    <label for="addContactEmail" class="ajouterText">Email à ajouter:</label>
                    <input type="text" id="addContactEmail" name="addContactEmail" placeholder="mail@promail.com" class="ajouterTextBox" required>

                    <label for="emailUser" class="ajouterText">dans le compte de :</label>
                    <select id="emailUser" id="emailUser" name="emailUser" class="ajouterTextBox">
                        <option value=<?=$user['email']?>><?=$user['email']?></option>
                    </select>
        
                    <input type="submit" value="AJOUTER" class="rajouterbutton">
                </form>
        </div>

        
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
