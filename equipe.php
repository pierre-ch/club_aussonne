<?php 
	Class equipe
	{
		private $idEquipe;
		private $nomEquipe;
		private $nbrPlaceEquipe; 
		private $ageMiniEquipe;
		private $ageMaxEquipe;
		private $sexeEquipe;

		/* La fonction (qu’on appelle ici CONSTRUCTEUR et qui permet de créer un objet avec ses attributs et 
		ses fonctionnalités (qu’on appelle des méthodes)*/
		public function __construct($unIdEquipe, $unNomEquipe‬‬‬‬, $unNbrPlaceEquipe‬‬‬‬, $unAgeMinEquipe‬‬‬‬, $unAgeMaxEquipe‬‬‬‬, $unSexeEquipe‬‬‬‬)
		{
			$this->idEquipe = $unIdEquipe;
			$this->nomEquipe = $unNomEquipe‬‬‬‬;
			$this->nbrPlaceEquipe = $unNbrPlaceEquipe‬‬‬‬;
			$this->ageMinEquipe = $unAgeMinEquipe‬‬‬‬;
			$this->ageMaxEquipe = $unAgeMaxEquipe‬‬‬‬;
			$this->sexeEquipe = $unSexeEquipe‬‬‬‬;
		}

		

		/* Les fonctions qui me permettent de visualiser chacun des attributs de manière indépendante. 
		On les appelle des ACCESSEURS, leurs noms commencent par get */
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

		public function getAgeMiniEquipe()
		{
			return $this->ageMiniEquipe;
		}

		public function getAgeMaxEquipe()
		{
			return $this->ageMaxEquipe;
		}

		public function getSexeEquipe()
		{
			return $this->sexeEquipe;
		}

		/* Les fonctions qui me permette de modifier chacun des attributs de manière indépendante. 
		On les appelle des SETTEUR, leurs noms commencent par set */
		public function setIdEquipe($unIdEquipe)
		{
			$this->idEquipe = $unIdEquipe;
		}

		public function setNomEquipe($unNomEquipe)
		{
			$this->nomEquipe = $unNomEquipe;
		}

		public function setNbrPlaceEquipe($unNbrPlaceEquipe)
		{
			$this->nbrPlaceEquipe = $unNbrPlaceEquipe;
		}

		public function setAgeMiniEquipe($unAgeMinEquipe‬‬‬‬)
		{
			$this->ageMiniEquipe = $unAgeMinEquipe‬‬‬‬;
		}

		public function setAgeMaxEquipe($unAgeMaxEquipe‬‬‬‬)
		{
			$this->ageMaxEquipe = $unAgeMaxEquipe‬‬‬‬;
		}

		public function setSexeEquipe($unSexeEquipe)
		{
			$this->sexeEquipe = $unSexeEquipe;
		}

	}
?>
