<?php

Class equipe
{
    private $idEquipe;
    private $nomEquipe;
    private $nbrPlaceEquipe;
    private $ageMinEquipe;
    private $ageMaxEquipe;
    private $sexeEquipe;

    public function __construct($unIdEquipe, $unNomEquipe, $unNbrPlaceEquipe, $unAgeMinEquipe, $unAgeMaxEquipe, $unSexeEquipe)
    {
        $this->idEquipe = $unIdEquipe;
        $this->nomEquipe = $unNomEquipe;
        $this->nbrPlaceEquipe = $unNbrPlaceEquipe;
        $this->ageMinEquipe = $unAgeMinEquipe;
        $this->ageMaxEquipe = $unAgeMaxEquipe;
        $this->sexeEquipe = $unSexeEquipe;
    }

    //get
    public function getIdEquipe()
    {
        return $this->idEquipe;
    }
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }
    public function getNbrPlaceEquipe()
    {
        return $this->nbrPlaceEquipe;
    }
    public function getAgeMinEquipe()
    {
        return $this->ageMinEquipe;
    }
    public function getAgeMaxEquipe()
    {
        return $this->ageMaxEquipe;
    }
    public function getSexeEquipe()
    {
        return $this->sexeEquipe;
    }

    //set
    public function setIdEquipe($unIdEquipe)
    {
        $this->IdEquipe = $unIdEquipe;
    }
    public function setNomEquipe($unNomEquipe)
    {
        $this->nomEquipe = $unNomEquipe;
    }
    public function setNbrPlaceEquipe($unNbrPlaceEquipe)
    {
        $this->nbrPlaceEquipe = $unNbrPlaceEquipe;
    }
    public function setAgeMinEquipe($unAgeMinEquipe)
    {
        $this->ageMinEquipe = $unAgeMinEquipe;
    }
    public function setAgeMaxEquipe($unAgeMaxEquipe)
    {
        $this->ageMaxEquipe = $unAgeMaxEquipe;
    }
    public function setSexeEquipe($unSexeEquipe)
    {
        $this->SexeEquipe = $unSexeEquipe;
    }

    public function afficheEquipe()
    {
        echo '<strong><u>Équipe :</u> '.$this->getNomEquipe().'</strong><br>';
        echo ' - '.$this->getNbrPlaceEquipe().' places dans léquipe <br>';
        echo ' - '.$this->getAgeMinEquipe().' pour les plus jeunes <br>';
        echo ' - '.$this->getAgeMaxEquipe(). ' pour les plus vieux <br>';
        echo ' - '.$this->getSexeEquipe(). ' (M=équipe masculine et F=équipe féminine)<br><br>';
    }

}

?>