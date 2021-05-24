<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$titre = "Supprimer un poste";
include "$racine/vue/header.php";
include "$racine/vue/vueSupprimerPoste.php";
include "$racine/vue/footer.php";
?>