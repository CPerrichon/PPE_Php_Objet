<?php

class User{

    private $mail;
    private $mdp;

    public function __construct($unMail,$unMdp){
        $this->mail = $unMail;
        $this->mdp = $unMdp;
    }

    public function GetMail()
    {
        return $this->mail;
    }

    public function GetMdp()
    {
        return $this->mdp;
    }

    
}