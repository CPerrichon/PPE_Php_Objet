<?php

class Salle
{
    private $nSalle;
    private $nomSalle;
    private $nbPoste;
    private $indIP;
    private $area_id;
    private $room_name;
    private $capacity;

    public function __construct($unNSalle, $unNomSalle, $unNbPoste, $unIndIP,$unArea_ID,$unRoomName,$uneCapacite)
    {
        $this->nSalle = $unNSalle;
        $this->nomSalle = $unNomSalle;
        $this->nbPoste = $unNbPoste;
        $this->indIP = $unIndIP;
        $this->area_id = $unArea_ID;
        $this->room_name = $unRoomName;
        $this->capacity = $uneCapacite;
    }

    public function GetNSalle()
    {
        return $this->nSalle;
    }

    public function GetNomSalle()
    {
        return $this->nomSalle;
    }

    public function GetNbPoste()
    {
        return $this->nbPoste;
    }

    public function GetUnIndIP()
    {
        return $this->indIP;
    }

    public function GetArea_Id()
    {
        return $this->area_id;
    }

    public function GetRoom_Name()
    {
        return $this->room_name;
    }

    public function GetCapacity()
    {
        return $this->capacity;
    }

    public function SetNSalle($NSalle)
    {
        $this->nSalle = $NSalle;
    }

    public function SetNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;
    }

    public function SetNbPoste($nbPoste)
    {
        $this->nSalle = $nbPoste;
    }

    public function SetUnIndIp()
    {
    }
}
