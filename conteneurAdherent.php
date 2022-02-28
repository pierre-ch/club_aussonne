<?php
include'adherent.php';

Class conteneurAdherent
{
    private $lesAdherents;
    public function __construct()
    {
        $this->$lesAdherents = new arrayObject();
    }

    public function ajouterUnAdherent($unIdAdherent, $unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent)
    {
        $unAdherent = new adherent($unIdAdherent, $unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent);
        $this->lesAdherents->append($unAdherent);
    }

    public function nbAdherent()
    {
        return $this->lesAdherents->count();
    }

    public function listeDesAdherents()
    {
        $liste = "";
        foreach ($this->lesAdherents as $unAdherent)
        {
            $liste = $liste.'Adhèrent : '.$unAdherent->getNomAdherent().'><br>';
        }
        return $liste;
    }

    public function lesAdherentsAuFormatHTML()
    {
        $liste = "<select name='idAdherent'";
        foreach ($this->lesAdherents as $unAdherent)
        {
            $liste = $liste."<option value='".$unAdherent->getIdAdherent();"'>".uneAdherent->getNomAdherent()."</option>";

        }
        $liste = $liste."</select>";
        return $liste;
    }

    public function donneObjetAdherentDepuisNumero($unIdAdherent)
    {
        $trouve = false;
        $leBonAdherent = null;
        $idAdherent = $this->lesAdherents->getIterator();
        while ((!$trouve)&&($idAdherent->valid()))
        {
            if ($idAdherent->current()->getIdAdherent()==$unIdAdherent)
            {
                $trouve = true;
                $leBonAdherent = $idAdherent->current();
            }
            else
            {
                $idAdherent->next();
            }
            return $leBonAdherent;
        }
    }

}

?>