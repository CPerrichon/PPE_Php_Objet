<?php

require_once("modele/Manager.php");
require_once("modele/AddPoste.php");


class AddPosteManager extends Manager
{
    public function addPoste($nPoste, $nomPoste,$ip, $ad,$type, $nsalle){
        $req = $this->getPDO()->prepare('INSERT INTO `poste`(`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`) VALUES (:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle)');
        $req->execute(array(
            'nPoste' => $nPoste,
            'nomPoste' => $nomPoste,
            'indIP' => $ip,
            'ad' => $ad,
            'typePoste' => $type,
            'nSalle' => $nsalle
        ));
    }
}