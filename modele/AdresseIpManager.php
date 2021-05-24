<?php

require_once("modele/Manager.php");
require_once("modele/AdresseIp.php");

class AdresseIpManager extends Manager
{
    public function getIp(){
        $ip = [];
        $q = $this->getPDO()->query('SELECT indIP,etage FROM segment');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $ip[$donnees['indIP']] = new Adresseip($donnees['indIP'],$donnees['etage']);
        }
        return $ip;


    }
}