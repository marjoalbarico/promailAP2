
    <!--LISTE DES MESSAGES-->
<div class="listeMessages">
    <h1 class="messageDetails"><?php echo count($messages)?> message(s)</h1>
    <?php for($i=count($messages)-1;$i>=0;$i--){ ?>
        <div class="eachMess">
            <h1 class="messageDetails">
                <?= $messages[$i]["dateheureMessage"] ?> <br>
                <?= $messages[$i]["emailContact"] ?>
            </h1>
        </div>
    <?php } ?>
</div>
    <!--LES DETAILS DE MESSAGES-->
<div class="detailsMessages">
    <?php for($i=count($messages)-1;$i>=0;$i--){ ?>
        <div class="eachMessbis">
            <h1 class="infoMessage">
                <?= $messages[$i]["emailContact"] ?> <br>
                Le : <?= $messages[$i]["dateheureMessage"] ?> <br><br>
                Objet : <?= $messages[$i]["objet"]?><br><br>
                Contenu : <br><?= $messages[$i]["contenu"]?><br><br>
            </h1>
        </div>
    <?php } ?>
</div>