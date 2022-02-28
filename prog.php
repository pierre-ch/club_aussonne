<?php

include('Equipe.php');
include('Adherent.php');

$natation = new Equipe(1, '🏊 Natation', 10, 5, 8, 'F');
$foot = new Equipe(2, '⚽ Foot', 20, 10, 12, 'M');
$judo = new Equipe(3, '🥋 Judo', 12, 7, 10, 'F');

echo $natation->afficheEquipe();
echo $foot->afficheEquipe();
echo $judo->afficheEquipe();

echo 'Changement des âges pour le foot en 12 à 14 ans <br><br>';
    $foot->setAgeMinEquipe(12);
    $foot->setAgeMaxEquipe(14);

echo 'Vérification modification <br>';
    echo $foot->afficheEquipe();

$adherent1 = new Adherent(1, 'Dupont', 'Pierre', 8, 'M');
$adherent2 = new Adherent(2, 'Dubois', 'Vincent', 10, 'M');
$adherent3 = new Adherent(3, 'Durant', 'Jacques', 6, 'M');
$adherent4 = new Adherent(4, 'Fleur', 'Sophie', 7, 'F');
$adherent5 = new Adherent(5, 'Martin', 'Valérie', 8, 'F');
$adherent6 = new Adherent(6, 'Dulac', 'Sandrine', 12,'F');

$adherent1->afficheAdherent();
$adherent2->afficheAdherent();
$adherent3->afficheAdherent();
$adherent4->afficheAdherent();
$adherent5->afficheAdherent();
$adherent6->afficheAdherent();

echo 'Changement dage de Valérie à 7 ans <br><br>';
    $adherent5->setAgeAdherent(7);

echo 'Vérification modification <br>';
    $adherent5->afficheAdherent();
?>