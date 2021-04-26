<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["salle"]= "afficheSalle.php";
    $lesActions["login"]="LoginControleur.php";
    $lesActions["logout"]="LogoutControleur.php";
    $lesActions["creer"]="creerPoste.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>

