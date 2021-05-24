<?php
  if($_SESSION["conected"]==true){
    if($_SESSION["level"]!=2){
        ?><h1>Accès interdit</h1>
        <?php
      
      }
      if($_SESSION["level"]==2){?>

<h1><?= $titre ?></h1>
<h1>Fonction en cours de préparation...<h1>
<?php }?> <?php  }else{ ?> <h1>Merci de vous connecter pour avoir accès à cette page</h1><?php }?>