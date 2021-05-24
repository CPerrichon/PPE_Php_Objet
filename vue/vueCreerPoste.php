<?php
  if($_SESSION["conected"]==true){
    if($_SESSION["level"]!=2){
        ?><h1>Accès interdit</h1>
        <?php
      
      }
      if($_SESSION["level"]==2){?>

<h1><?= $titre ?></h1>

<form action="./?action=creer" method="post">
    <div class="form-outline mb-4">
        <label class="form-label" name="nPoste" for="nPoste">Numéro du poste:</label>
        <input  name="nPoste" id="nPoste" class="form-control" value="p"/>
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" name="nomPoste" for="nomPoste">Nom du poste:</label>
        <input  name="nomPoste" id="nomPoste" class="form-control" value="Poste "/>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" name="nSalle" for="nSalle">Numero de la salle:</label>
        <select class="browser-default custom-select" name="nSalle">
            <?php
            foreach ($salles as $salless)
            {
                ?>
                <option><?php echo $salless->getnSalle(); ?></option>
                <?php
            }
            ?>
        </select>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" name="indIP" for="indIP">Adresse IP du poste:</label>
        <select class="browser-default custom-select" name="indIP">
            <?php
            foreach ($ip as $ipp)
            {
                ?>
                <option><?php echo $ipp->getIp(); ?></option>
                <?php
            }
                ?>
        </select>
    </div>
    
    <div class="form-outline mb-4">
        <label class="form-label" name="typePoste" for="typePoste">Type de poste:</label>
        <select class="browser-default custom-select" name="typePoste">
            <?php
            foreach ($type as $typ)
            {
                ?>
                <option><?php echo $typ->getTypeLP(); ?></option>
                <?php
            }
            ?>
        </select>
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" name="ad" for="ad">AD:</label>
        <input  name="ad" id="ad" class="form-control" maxlength="2" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" name="nbLog" for="nbLog">nbLog:</label>
        <input  type="number" min="0" max="100"  name="nbLog" id="nbLog" class="form-control" maxlength="2"/>
    </div>    

    

    <button type="submit" class="btn btn-primary btn-block">Ajouter le poste</button>
</form>

<?php }?> <?php  }else{ ?> <h1>Merci de vous connecter pour avoir accès à cette page</h1><?php }?>