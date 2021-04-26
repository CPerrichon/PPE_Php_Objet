<?php
  if($_SESSION["conected"]==true){?>
<h1>Site de Gestion des salles</h1>
<?php }else{?>

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