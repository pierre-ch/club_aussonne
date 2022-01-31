<?php 
    include 'equipe.php';
    include 'adherent.php';


    $natation = new equipe(1,'natation',10,5,8,'F');
    $foot = new equipe(2,'foot',20,10,12,'M');
    $judo = new equipe(3,'judo',12,7,10,'F');

    // ============================================================================================================
    // ================================================= Natation =================================================
    // ============================================================================================================
    echo 'Equipe : '.$natation->getNomEquipe();
                echo 	' - '.$natation->getNbrPlaceEquipe().' places dans l equipe';
                echo    ' - '.$natation->getAgeMiniEquipe().' pour les plus jeunes';
                echo    ' - '.$natation->getAgeMaxEquipe().' pour les plus vieux';
                echo    ' - '.$natation->getSexeEquipe().' (M=equipe masculine et F=équipe féminine) <br> <br>';

    // ========================================================================================================
    // ================================================= Foot =================================================
    // ========================================================================================================
    echo 'Equipe : '.$foot->getNomEquipe();
                echo    ' - '.$foot->getNbrPlaceEquipe().' places dans l equipe';
                echo    ' - '.$foot->getAgeMiniEquipe().' pour les plus jeunes';
                echo    ' - '.$foot->getAgeMaxEquipe().' pour les plus vieux';
                echo    ' - '.$foot->getSexeEquipe().' (M=equipe masculine et F=équipe féminine)<br> <br>';

    // ========================================================================================================
    // ================================================= Judo =================================================
    // ========================================================================================================
    echo 'Equipe : '.$judo->getNomEquipe();
                echo    ' - '.$judo->getNbrPlaceEquipe().' places dans l equipe';
                echo    ' - '.$judo->getAgeMiniEquipe().' pour les plus jeunes';
                echo    ' - '.$judo->getAgeMaxEquipe().' pour les plus vieux';
                echo    ' - '.$judo->getSexeEquipe().' (M=equipe masculine et F=équipe féminine)<br><br>';
    
    // ========================================================================================================
    // ==================================== Modification âge foot 12 à 14 ans =================================
    // ========================================================================================================
    echo 'Changement des ages pour le foot en 12 à 14 ans <br>';
                $foot->setAgeMiniEquipe(12);
                $foot->setAgeMaxEquipe(14);
    
    // ========================================================================================================
    // ========================== Vérification des modifications de l'équipe foot =============================
    // ========================================================================================================
    echo 'Vérification modification : <br> Equipe de : '.$foot->getNomEquipe();
                echo    ' - '.$foot->getNbrPlaceEquipe().' places dans l equipe';
                echo    ' - '.$foot->getAgeMiniEquipe().' pour les plus jeunes';
                echo    ' - '.$foot->getAgeMaxEquipe().' pour les plus vieux';
                echo    ' - '.$foot->getSexeEquipe().' (M=equipe masculine et F=équipe féminine)<br> <br>';

    
    // ========================================================================================================

    $adherent1 = new adherent(1,'Dupont','Pierre',8,'M');
    $adherent2 = new adherent(2,'Dubois','Vincent',10,'M');
    $adherent3 = new adherent(3,'Durant','Jacques',6,'M');
    $adherent4 = new adherent(4,'Fleur','Sophie',7,'F');
    $adherent5 = new adherent(5,'Martin','Valerie',8,'F');
    $adherent6 = new adherent(6,'Dulac','Sandrine',12,'F');

    $adherent5 -> setAgeAdherent(7);
    
?>