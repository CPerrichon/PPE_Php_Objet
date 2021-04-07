<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/UserManager.php");

$userManager = new UserManager();
$userManager->TestUserExist($_POST['mail'],$_POST['mdp']);

include "$racine/vue/header.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/footer.php";
?>