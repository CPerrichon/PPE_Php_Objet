<?php

   
/*if (!isset($_SESSION['username']))
{
    include 'login.php';
    die();
}*/

include "getRacine.php";
include "$racine/controleur/controleurPrincipal.php";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";
?>
     