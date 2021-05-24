<?php

class AdresseIp
{
    private $ip;
    private $etage;


    public function __construct($unIp, $unEtage)
    {
        $this->ip = $unIp;
        $this->etage = $unEtage;
    }

    public function GetIp()
    {
        return $this->ip;
    }

    public function GetEtage()
    {
        return $this->etage;
    }
}