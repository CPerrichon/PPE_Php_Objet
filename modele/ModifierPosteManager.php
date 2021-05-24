<?php

require_once("modele/Manager.php");
require_once("modele/ModifierPoste.php");


class ModifierPosteManager extends Manager
{
    public function listePoste(){
        $postes = [];
        $q = $this->getPDO()->query('SELECT `nPoste`,`nomPoste`,`indIP`,`ad`,`typePoste`,`nSalle`, `nbLog` FROM `poste`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $postes[$donnees['nomPoste']] = new ModifierPoste($donnees['nPoste'], $donnees['nomPoste'], $donnees['indIP'], $donnees['ad'], $donnees['typePoste'], $donnees['nSalle'], $donnees ['nbLog']);
        }
        return $postes;
    }

    public function modifierPoste($nPoste, $nomPoste,$ip, $ad,$type, $nsalle, $nbLog){
        $req = $this->getPDO()->prepare('UPDATE poste SET nPoste=?,indIP=?,ad=?,typePoste=?,nSalle=?,nbLog=? WHERE nomPoste=?');
        $req->execute(array(
            $nPoste,
            $ip,
            $ad,
            $type,
            $nsalle,
            $nbLog,
            $nomPoste
        ));
    }
}