<?php


require 'functions.php';

echo "Doc a commencé son voyage dans le <b>31 décembre 1985. </b><br><br>";

$travel = new TimeTravel();

// Réglage de la date de départ
$start = $travel->start->setDate(1985, 12, 31);


// Création de l'objet $interval de la Classe DateInterval
$interval = new DateInterval("PT1000000000S");


// Affichage de la date d'arrivée de Doc (1 milliard de seconde avant la date de départ)
echo "Il s'est retrouvé projeté dans le temps à la date du <b>" . $travel->findDate($interval) . "</b><br><br>";


// Règlage des dates et de l'heure pour le convertisseur temporel
$start = $travel->start->setDate(1954, 4, 24);
$start = $travel->start->setTime(06, 35, 00);
$end = $travel->end->setDate(1985, 12, 31);
$end = $travel->end->setTime(00, 00, 00);


// Affichage de la différence entre les 2 dates
echo $travel->getTravelInfo() . "<br><br>";


// Création de l'objet $interval de la Classe DateInterval (+ 1 mois et 7 jours).
$interval = new DateInterval("P1M7D");


// Création de l'objet $step de la Classe DatePeriod
$step = New DatePeriod($start, $interval, $end);


// Affichage du tableau de N objets DateTime correctement formatés.
echo "Liste des arrêts :";
echo "<pre>";
print_r($travel->backToFutureStepByStep($step));
echo "</pre>";