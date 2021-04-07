<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/SalleManager.php");
require_once("$racine/modele/AreaManager.php");
require_once("$racine/modele/PosteManager.php");
    
$titre = "Liste des salles";

$salleManager = new SalleManager(); // Création d'un objet
$salles = $salleManager->GetList(); // Appel d'une fonction de cet objet
$areaManager = new AreaManager();
$areas = $areaManager->GetList();
$posteManager = new PosteManager();
$postes = $posteManager->GetListPostes();


// appel du script de vue qui permet de gerer l'affichage des donnees
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheSalle.php";
include "$racine/vue/footer.php";
