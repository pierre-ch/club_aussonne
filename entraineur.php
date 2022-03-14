<?php

Class entraineur
{
    private $idEntraineur;
    private $nomEntraineur;
    
    public function __construct($unIdEntraineur, $unNomEntraineur)
    {
        $this->idEntraineur = $unIdEntraineur;
        $this->nomEntraineur = $unNomEntraineur;
    }

    //get
    public function getIdEntraineur()
    {
        return $this->idEntraineur;
    }
    public function getNomEntraineur()
    {
        return $this->nomEntraineur;
    }

    //set
    public function setIdEntraineur($unIdEntraineur)
    {
        $this->idEntraineur = $unIdEntraineur;
    }
    public function setNomAdherent($unNomEntraineur)
    {
        $this->nomEntraineur = $unNomEntraineur;
    }

}

?>