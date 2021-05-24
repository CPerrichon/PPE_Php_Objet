<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./?action=accueil">GSI (Gestion des Salles Informatiques)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="./?action=salle">Salles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./?action=creer">Créer un poste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./?action=modif">Modifier un poste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./?action=suppr">Supprimer un poste</a>
      </li>
    </ul>
  </div>
  <?php if($_SESSION["conected"]==true){?>
  <a class="navbar-brand" href="./?action=logout">Déconnexion</a>
  <?php } else {}?> 
  </nav>
