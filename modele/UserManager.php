<?php

require_once("modele/Manager.php");
require_once("modele/User.php");

class UserManager extends Manager 
{
    public function TestUserExist($mail,$mdp)
    {
        $q = $this->getPDO()->query('SELECT id, level, name, password, email FROM mrbs_users WHERE email = "' . $mail . '" AND password = "' . $mdp . '"');
        $count =0;
        $level="";
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $count++;
            $level = $donnees['level'];
        }
        if ($count>0)
        {
            $_SESSION["level"] = $level;
            $_SESSION["conected"] = true;
            var_dump("tu es co");
        }else{
            var_dump("echoue");
        }
    }
    public function LogOut()
    {
        $_SESSION["level"] = false;
    }
}
