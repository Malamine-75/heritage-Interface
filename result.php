<?php

include 'Comparable.php';
include 'ISport.php';
include 'sport.php';
include 'Club.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'data.php';

var_dump($_POST);

//Liste des sports d'un club
if (isset($_GET['id']) || isset($_POST['IdClub'])){
    if (isset($_GET['id'])){
        $idClub = $_GET['id'];
    }
    else{
        $idClub = $_POST['IdClub'];
    }

    echo 'Liste des sports : '.$club[$idClub]->getNomClub();
    $sp1 = $club[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}

echo "<br><a href='/index.php'>Retour</a>";