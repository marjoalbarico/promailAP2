    <!--FORM POUR COMPOSER UN MESSAGE-->
<div class="composebox">
    <form action="../controleur/traitementMessage.php" method="post">
        <label for="exp" class="sendtotext">De :</label>
        <select id="exp" id="exp" name="exp" class="novMessBox">
            <option value=<?=$user['email']?>><?=$user['email']?></option>
        </select>

        <label for="sendto" class="sendtotext">À :</label>
        <input type="text" id="sendto" name="sendto" placeholder="mail@promail.com" class="novMessBox" required>

        <label for="objet" class="sendtotext">Objet :</label>
        <input type="text" id="objet" name="objet" class="novMessBox">
      
        <label for="mess" class="sendtotext">Message :</label>
        <textarea class="composemess" id="mess" name="mess"></textarea>

        <input type="submit" value="ENVOYER" class="sendbutton">
    </form>
</div>