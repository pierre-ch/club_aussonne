<?php
include "equipe.php";

Class conteneurEquipe
{
    private $lesEquipes;
    public function __construct()
    {
        $this->lesEquipes = new arrayObject();
    }
    public function ajouterUneEquipe($unIdEquipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe)
    { 
        $uneEquipe = new equipe($unIdEquipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe);
        $this->lesEquipes->append($uneEquipe);
    }

    public function nbEquipe()
    {       
        return $this->lesEquipes->count();
    }

    public function listeDesEquipes()
    {
        $liste = "";
        foreach ($this->lesEquipes as $uneEquipe)
        {
            $liste = $liste.'Equipe : '.$uneEquipe->getNomEquipe().'><br>';
        }
        return $liste;
    }

    public function lesEquipesAuFormatHTML()
    {
        $liste = "<select name='idEquipe'>";
        foreach ($this->lesEquipes as $uneEquipe)
        {
            $liste = $liste."<option value='".$uneEquipe->getIdEquipe();"'>".uneEquipe->getNomEquipe()."</option>";
        }
        $liste = $liste."</select>";
        return $liste;
    }

    public function donneObjetEquipeDepuisNumero($unIdEquipe)
    {
        echo 'Je veux Id de lequipe que je passe '.$unIdEquipe;
        $laBonneEquipe = null;
        foreach($this->lesEquipes as $lEquipe)
        {
            if($lEquipe->getIdEquipe() == $unIdEquipe)
            {
                $laBonneEquipe=$lEquipe;
            }
        }

        return $laBonneEquipe;

        /*$trouve = false;
        $laBonneEquipe = null;
        $idEquipe = $this->lesEquipes->getIterator();
        while ((!$trouve)&&($idEquipe->valid()))
        {
            if ($idEquipe->current()->getIdEquipe()==$unIdEquipe)
            {
                $trouve=true;
                $laBonneEquipe = $idEquipe->current();
            }
            else
            {
                $idEquipe->next();
            }
            return $laBonneEquipe;
        }
        */
    }

}

?>