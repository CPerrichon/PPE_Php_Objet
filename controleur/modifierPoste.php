<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/SalleManager.php");
require_once("$racine/modele/posteManager.php");
require_once("$racine/modele/AreaManager.php");
require_once("$racine/modele/AdresseIpManager.php");
require_once("$racine/modele/TypePosteManager.php");
require_once("$racine/modele/ModifierPosteManager.php");

$nomPosteManager = new ModifierPosteManager();
$nomPoste = $nomPosteManager->listePoste();

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

if (!empty($_POST['nPoste']) && !empty($_POST['nomPoste']) && !empty($_POST['indIP']) && !empty($_POST['ad']) && !empty($_POST['typePoste']) && !empty($_POST['nSalle']))
{
    $modifPosteManager = new ModifierPosteManager();
    $modifPoste = $modifPosteManager->modifierPoste($_POST['nPoste'], $_POST['nomPoste'], $_POST['indIP'], $_POST['ad'], $_POST['typePoste'], $_POST['nSalle'], $_POST ['nbLog']);
}

$titre = "Modifier un poste";
include "$racine/vue/header.php";
include "$racine/vue/vueModifierPoste.php";
include "$racine/vue/footer.php";
?>