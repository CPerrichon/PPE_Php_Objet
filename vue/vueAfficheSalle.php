<?php
  if($_SESSION["conected"]==true){?>
<h1><?= $titre ?></h1>

    <?php
    foreach ($salles as $salle) {
    ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Liste des postes <?= $salle->GetNSalle() ?> </h5>
          <p class="card-text">
          <ul>
            <li><?= $salle->GetRoom_Name() ?></li>
            <li>Nombres de postes :<?= $salle->GetNbPoste() ?></li>
            <li><?= $salle->GetUnIndIP() ?></li>
            <li><?= $areas[$salle->GetArea_Id()]->GetArea_name() ?></li>
            <li><?= $salle->GetCapacity() ?></li>
          </ul>
          <br>
          <?php foreach($postes as $poste)
          { 
            if($salle->GetNSalle()==$poste->GetNSalle())
          {?>
            <ul>
                <li><?= $poste->GetNPoste()?></li>
            </ul>

          <?php
          }
          }?>
          </p>
        </div>
      </div>
      
    <?php
    }
  }else{
    ?>
    <h1>Merci de vous connecter pour avoir accès à cette page</h1>
    <?php
  }?>