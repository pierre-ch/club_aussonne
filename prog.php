<?php

include('Equipe.php');
include('Adherent.php');

$natation = new Equipe(1, 'Natation', 10, 5, 8, 'F');
$foot = new Equipe(2, 'Foot', 20, 10, 12, 'M');
$judo = new Equipe(3, 'Judo', 12, 7, 10, 'F');

echo 'Équipe : '.$natation->getNomEquipe().'<br>';
    echo '- '.$natation->getNbrPlaceEquipe().' places dans l equipe<br>';
    echo '- '.$natation->getAgeMinEquipe().' pour les plus jeunes<br>';
    echo '- '.$natation->getAgeMaxEquipe().' pour les plus vieux<br>';
    echo '- '.$natation->getSexeEquipe().' (M=équipe masculine et F=équipe féminine) <br> <br>';

echo 'Équipe : '.$foot->getNomEquipe().'<br>';
    echo '- '.$foot->getNbrPlaceEquipe().' places dans l equipes<br>';
    echo '- '.$foot->getAgeMinEquipe().' pour les plus jeunes<br>';
    echo '- '.$foot->getAgeMaxEquipe().' pour les plus vieux<br>';
    echo '- '.$foot->getSexeEquipe().' (M=équipe masculine et F=équipe féminine) <br> <br>';

echo 'Équipe : '.$judo->getNomEquipe().'<br>';
    echo '- '.$judo->getNbrPlaceEquipe().' places dans l equipes<br>';
    echo '- '.$judo->getAgeMinEquipe().' pour les plus jeunes<br>';
    echo '- '.$judo->getAgeMaxEquipe().' pour les plus vieux<br>';
    echo '- '.$judo->getSexeEquipe().' (M=équipe masculine et F=équipe féminine) <br> <br>';

echo 'Changement des âges pour le foot en 12 à 14 ans <br><br>';
    $foot->setAgeMinEquipe(12);
    $foot->setAgeMaxEquipe(14);

echo 'Vérification modification <br> Equipe de : '.$foot->getNomEquipe().'<br>';
    echo '- '.$foot->getNbrPlaceEquipe().' places dans l equipe<br>';
    echo '- '.$foot->getAgeMinEquipe().' pour les plus jeunes<br>';
    echo '- '.$foot->getAgeMaxEquipe().' pour les plus vieux<br>';
    echo '- '.$foot->getSexeEquipe().' (M=équipe masculine et F=équipe) féminine <br> <br>';

$adherent1 = new Adherent(1, 'Dupont', 'Pierre', 8, 'M');
$adherent2 = new Adherent(2, 'Dubois', 'Vincent', 10, 'M');
$adherent3 = new Adherent(3, 'Durant', 'Jacques', 6, 'M');
$adherent4 = new Adherent(4, 'Fleur', 'Sophie', 7, 'F');
$adherent5 = new Adherent(5, 'Martin', 'Valérie', 8, 'F');
$adherent6 = new Adherent(6, 'Dulac', 'Sandrine', 12,'F');

echo 'Changement dage de Valérie à 7 ans <br><br>';
    $adherent5->setAgeAdherent(7);

echo 'Vérification modification <br>';
    echo '- '.$adherent5->getAgeAdherent().' ans <br>';


?>