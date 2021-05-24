<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/SalleManager.php");
require_once("$racine/modele/posteManager.php");
require_once("$racine/modele/areaManager.php");
require_once("$racine/modele/adresseIpManager.php");
require_once("$racine/modele/typePosteManager.php");
require_once("$racine/modele/addPosteManager.php");

$ipManager = new adresseIpManager();
$ip = $ipManager->getIp();

$posteManager = new posteManager();
$postes = $posteManager->getListPostes();

$salleManager = new SalleManager();
$salles = $salleManager->getList();

$areaManager = new areaManager();
$areas = $areaManager->getList();

$typeManager = new typePosteManager();
$type = $typeManager->getList();


if (!empty($_POST['nPoste']) && !empty($_POST['nomPoste']) && !empty($_POST['indIP']) && !empty($_POST['ad']) && !empty($_POST['typePoste']) && !empty($_POST['nSalle'])) {
    $ajoutPosteManager = new AddPosteManager();
    $ajoutPoste = $ajoutPosteManager->addPoste($_POST['nPoste'], $_POST['nomPoste'], $_POST['indIP'], $_POST['ad'], $_POST['typePoste'], $_POST['nSalle'], $_POST['nbLog']);
}

$titre = "Créer un poste";
include "$racine/vue/header.php";
include "$racine/vue/vueCreerPoste.php";
include "$racine/vue/footer.php";
?>