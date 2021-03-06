<?php

require_once("modele/Manager.php");
require_once("modele/Poste.php");

class PosteManager extends Manager 
{
    public function getListPostes()//instancie une collection d'objet poste
    {
        $postes = [];
        $q = $this->getPDO()->query('SELECT nPoste, nSalle FROM poste  ORDER BY nPoste');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $postes[$donnees['nPoste']] = new Poste($donnees['nPoste'], $donnees['nSalle']);
        }
        return $postes;

    }
}
?>