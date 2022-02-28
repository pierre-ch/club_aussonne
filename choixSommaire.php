<?php
	include "equipe.php";
	include "adherent.php";
    include "conteneurEquipe.php";
    include "conteneurAdherent.php";
	$action = $_GET['action'];
	$vue = $_GET['vue'];

    $tousLesAdherents = NULL;
    $toutesLesEquipes = NULL;

    if (!isset($toutesLesEquipes))
    {
        $toutesLesEquipes = new conteneurEquipe();
        $tousLesAdherents = new conteneurAdherent();
    }

    if (isset($_GET['action']) && isset($_GET['vue']))
	{	$action = $_GET['action'];
	    $vue = $_GET['vue'];
	
		switch ($vue)
		{
			case "Equipe" :
				actionEquipe($action,$toutesLesEquipes);
				break;
			case "Adherent" :
				actionAdherent($action,$touslesAdherents);
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
				
				echo "création effectué";
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

	function actionAdherent($action)
	{
		switch ($action)
		{
			case "ajouter":
				$Adherent1 = new adherent(1,'Dupont','Pierre',8,'F');
				$Adherent2 = new adherent(2,'Dubois','Vincent',10,'M');
				$Adherent3 = new adherent(3,'Durant','Jacques',6,'M');
				$Adherent4 = new adherent(4,'Fleur','Sophie',7,'F');
				$Adherent5 = new adherent(5,'Martin','Valerie',8,'F');
				$Adherent6 = new adherent(6,'Dulac','Sandrine',12,'F');
				echo "création effectué";
				echo '<A href =menu.php>Retour</A>';
				break;
			case "visualiser" :
				$Adherent1->afficheAdherent();
				$Adherent2->afficheAdherent();
				$Adherent3->afficheAdherent();
				$Adherent4->afficheAdherent();
				$Adherent5->afficheAdherent();
				$Adherent6->afficheAdherent();
				echo '<A href =menu.php>Retour</A>';
				break;
			case "modifier" :
				$Adherent5->setAgeadherent(7);
				echo '<A href =menu.php>Retour</A>';
				break;
		}
	}

?>
