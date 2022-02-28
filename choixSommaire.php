<?php
	session_start();
	include "conteneurEquipe.php";
	include "conteneurAdherent.php";
	
	$toutesLesEquipes=NULL;
	$tousLesAdherents=NULL;
	
	if(isset($_SESSION['toutesLesEquipes']))
	{
		$toutesLesEquipes = unserialize($_SESSION['toutesLesEquipes']);
	}

	if(isset($_SESSION['tousLesAdherents']))
	{
		echo "je suis dans session";
		$tousLesAdherents = unserialize($_SESSION['tousLesAdherents']);
	}

	if (!isset($toutesLesEquipes))
	{
		$toutesLesEquipes = new conteneurEquipe();
	}

	if (!isset($tousLesAdherents))
	{	
		echo "je suis dans la création de tousLesAdherents";
		$tousLesAdherents = new conteneurAdherent();	
	}

	if (isset($_GET['action']) && isset($_GET['vue']))
	{   
		$action = $_GET['action'];
	    $vue = $_GET['vue'];

		switch ($vue)
		{	
			case "Equipe" :
				actionEquipe($action,$toutesLesEquipes);
				break;
			case "Adherent" :
				actionAdherent($action,$tousLesAdherents,$toutesLesEquipes);
				break;	
		}

	}
	function actionEquipe($action,$toutesLesEquipes)
	{   	
		switch ($action)
		{	
			case "ajouter":
				$toutesLesEquipes->ajouterUneEquipe(1,'natation',10,5,8,'F');
				$toutesLesEquipes->ajouterUneEquipe(2,'foot',20,10,12,'M');
				$toutesLesEquipes->ajouterUneEquipe(3,'judo',12,7,10,'F');
				$_SESSION["toutesLesEquipes"] = serialize($toutesLesEquipes);
				echo "création des équipes effectué";
				echo '<A href =menu.php>Retour</A>';	
				break;
			case "visualiser" :
				$toutesLesEquipes->listeDesEquipes();
				echo '<A href =menu.php>Retour</A>';
				break;
			case "modifier" :
				//$foot->setAgeMinEquipe(12);
				//$foot->setAgeMaxEquipe(14);
				echo '<A href =menu.php>Retour</A>';	
				break;
		}
	}
	function actionAdherent($action,$tousLesAdherents,$toutesLesEquipes)
	{	switch ($action)
		{	case "ajouter":
				echo "je suis avant la création";
				$lEquipe=$toutesLesEquipes->donneObjetEquipeDepuisNumero(1);
				$lEquipe->afficheEquipe();
				$tousLesAdherents->ajouterUnAdherent(1,'Dupont','Pierre',8,'F',$toutesLesEquipes->donneObjetEquipeDepuisNumero(1));
				$tousLesAdherents->ajouterUnAdherent(2,'Dubois','Vincent',10,'M',$toutesLesEquipes->donneObjetEquipeDepuisNumero(1));
				$tousLesAdherents->ajouterUnAdherent(3,'Durant','Jacques',6,'M',$toutesLesEquipes->donneObjetEquipeDepuisNumero(2));
				$tousLesAdherents->ajouterUnAdherent(4,'Fleur','Sophie',7,'F',$toutesLesEquipes->donneObjetEquipeDepuisNumero(2));
				$tousLesAdherents->ajouterUnAdherent(5,'Martin','Valerie',8,'F',$toutesLesEquipes->donneObjetEquipeDepuisNumero(3));
				$tousLesAdherents->ajouterUnAdherent(6,'Dulac','Sandrine',12,'F',$toutesLesEquipes->donneObjetEquipeDepuisNumero(3));		
				$_SESSION["tousLesAdherents"] = serialize($tousLesAdherents);
				echo "création des adherents effectué";
				echo '<A href =menu.php>Retour</A>';	break;
			case "visualiser" :
				$tousLesAdherents->listeDesAdherents();
				echo '<A href =menu.php>Retour</A>';	break;
			case "modifier" :
				//$Adherent5->setAgeadherent(7);
				echo '<A href =menu.php>Retour</A>';	break;
		}
	}
?>

