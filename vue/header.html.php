<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@400;600&family=Roboto&display=swap" rel="stylesheet">

    <title><?php echo $titre ?></title>
    <style type="text/css">
            @import url("../css/styles.css");
            @import url("../css/profils.css");
            @import url("../css/details.css");
    </style>
  </head>
  <body>
  
  <nav>
    <a href="../controleur/seconnecter.php"><img src="../img/openmail.png" class="iconNav"></a>
    <h1 class="navName">PROMAIL - <?=$user['email']?></h1>

    <a href="../controleur/sedeconnecter.php"><img src="../img/power.png" class="sideicon"></a>
    <a href="../controleur/updateUser.php"><img src="../img/settings.png" class="sideicon"></a>
    <a href="https://calendar.google.com/"><img src="../img/calendar.png" class="sideicon"></a>
    <a href="../controleur/contact.php"><img src="../img/contact.png" class="sideicon"></a>
  </nav>


  

    