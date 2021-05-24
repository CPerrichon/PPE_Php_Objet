<?php
  if($_SESSION["conected"]==true){?>
<h1>Site de Gestion des salles</h1>
<h5>Ce site est à disposition de la Maison des ligues afin de pouvoir créer, modifier, supprimer des postes informatiques, et aussi de pouvoir accéder toutes les informations concernant les salles informatiques</h5>
<?php }else{
	?><h1><?php echo $_SESSION["ereur"]?></h1>

<h1>Site de Gestion des salles</h1>
<form action="./?action=login" method="post">
	<div class="form-group">
		<label for="exampleInputEmail1">Login</label>
		<input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Entrer le login" name="mail">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Mot de passe</label>
		<input type="password" class="form-control" id="mdp" placeholder="mot de passe" name="mdp">
	</div>
	<button type="submit" class="btn btn-primary">Connexion</button>
</form>
<?php }?>