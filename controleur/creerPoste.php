<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Créer poste";
include "$racine/vue/header.php";
include "$racine/vue/vueCreerPoste.php";
include "$racine/vue/footer.php";
?>