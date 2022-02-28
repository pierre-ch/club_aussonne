<?php

Class adherent
{
    private $idAdherent;
    private $nomAdherent;
    private $prenomAdherent;
    private $ageAdherent;
    private $sexeAdherent;

    public function __construct($unIdAdherent, $unNomAdherent, $unPrenomAdherent, $unAgeAdherent, $unSexeAdherent)
    {
        $this->idAdherent = $unIdAdherent;
        $this->nomAdherent = $unNomAdherent;
        $this->prenomAdherent = $unPrenomAdherent;
        $this->ageAdherent = $unAgeAdherent;
        $this->sexeAdherent = $unSexeAdherent;
    }

    //get
    public function getIdAdherent()
    {
        return $this->idAdherent;
    }
    public function getNomAdherent()
    {
        return $this->nomAdherent;
    }
    public function getPrenomAdherent()
    {
        return $this->prenomAdherent;
    }
    public function getAgeAdherent()
    {
        return $this->ageAdherent;
    }
    public function getSexeAdherent()
    {
        return $this->sexeAdherent;
    }

    //set
    public function setIdAdherent($unIdAdherent)
    {
        $this->idAdherent = $unIdAdherent;
    }
    public function setNomAdherent($unNomAdherent)
    {
        $this->nomAdherent = $unNomAdherent;
    }
    public function setPrenomAdherent($unPrenomAdherent)
    {
        $this->prenomAdherent = $unPrenomAdherent;
    }
    public function setAgeAdherent($unAgeAdherent)
    {
        $this->ageAdherent = $unAgeAdherent;
    }
    public function setSexeAdherent($unSexeAdherent)
    {
        $this->sexeAdherent = $unSexeAdherent;
    }

    public function afficheAdherent()
    {
        echo '<strong><u>Adhérent :</u> '.$this->getNomAdherent().'</strong><br>';
        echo ' - '.$this->getPrenomAdherent().'<br>';
        echo ' - '.$this->getAgeAdherent().' ans<br>';
        echo ' - '.$this->getSexeAdherent(). '<br><br>';
    }

}

?>