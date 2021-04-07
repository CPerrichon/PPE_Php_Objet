<?php

require_once("modele/Manager.php");
require_once("modele/Salle.php");

class SalleManager extends Manager 
{
    public function get($nSalle) //instancie un objet salle
    {
        $nSalle = (int) $nSalle;
        $q = $this->getPDO()->query('SELECT nSalle, nomSalle, nbPoste, indIP FROM salle INNER JOIN mrbs_room ON salle.id = mrbs_room.id  WHERE nSalle = '.$nSalle);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Salle($donnees['nSalle'], $donnees['nomSalle'],$donnees['nbPoste'],$donnees['indIP'],$donnees['area_id'],$donnees['room_name'],$donnees['capacity']);
    }

    public function getList()//instancie une collection d'objet salle
    {
        $salles = [];
        $q = $this->getPDO()->query('SELECT nSalle, nomSalle, nbPoste, indIP, area_id, room_name, capacity FROM salle INNER JOIN mrbs_room ON salle.id = mrbs_room.id ORDER BY nSalle');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $salles[$donnees['nSalle']] = new Salle($donnees['nSalle'], $donnees['nomSalle'],$donnees['nbPoste'],$donnees['indIP'],$donnees['area_id'],$donnees['room_name'],$donnees['capacity']);
        }
        return $salles;
    }
}
?>
