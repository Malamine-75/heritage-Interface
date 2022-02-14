<?php
include 'ISport.php';
include 'comparable.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';

echo "<br>Projet Heritage et Interface<br>";


// Init les clubs
$club = array();
$club[1] = new Club(1, "Club de la honte", 0);
$club[2] = new Club(2, "FC shinigami", 93);
$club[3] = new Club(3, "FC Espada", 80);
$club[4] = new Club(4, "FC Fraude" , 1) ;


// Les sports du Club de la Honte
$sport1 = new Sport("Football", 11);
$sport2 = new Sport("Deltaplane", 4);
$sportBallon = new SportBallon(nomSport: "Basket", nbJoueurs: 5, largeur: 40, longueur: 50);
$sportRelais = new SportRelais("Course Poursuite", 2 ,700) ;
$club[1]->AjouterSport($sport1);
$club[1]->AjouterSport($sport2);
$club[1]->AjouterSport($sportBallon);
$club[1]->AjouterSport($sportRelais);

// Les Sports du FC Shinigami
$sport1 = new Sport("Football", 11);
$sport3 = new Sport("Chasse Hollow", 13);
$sport4 = new Sport("Mission Lester" ,4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport3);
$club[2]->AjouterSport($sport4);

//Les Sport du FC Espada
$sport1 = new Sport("Football", 11);
$sport5 = new Sport("Chasse au shinigami", 10);
$sportRelais1 = new SportRelais("Course Poursuite",2,700);
$club[3]->AjouterSport($sport1);
$club[3]->AjouterSport($sport5);
$club[3]->AjouterSport($sportRelais1);

//Sport du FC fraude
$sport1 = new Sport("Football", 11);
$sport6 = new Sport("Royal Rumble", 30);
$sportBallon = new SportBallon("Basket",5,40,50);
$club[4]->AjouterSport($sport1);
$club[4]->AjouterSport($sport6);
$club[4]->AjouterSport($sportBallon);

foreach($club as $keyclub => $valueclub)
{
    echo $valueclub->getDescription()."<br>";
}

$listSport[] = new Sport("Football",11);
$listSport[] = new Sport("Deltaplane",4);
$listSport[] = new Sport("Chausse au hollow ",13);
$listSport[] = new Sport("Chasse au shinigami",10);
$listSport[] = new SportBallon(nomSport: "Basket",nbJoueurs: 5,largeur: 40,longueur: 50);
$listSport[] = new Sport("Mission de Lester",4);
$listSport[] = new SportRelais("Course poursuite",2,700);
$listSport[] = new Sport("Royal Rumble",30);

echo '<br>LISTE DES CLUBS :'."<br>";
echo "<a href="."http://localhost:8080/Club-Club-De-La-Honte/%22%3E<br>Club de la Honte"."<br>";
echo "<a href="."http://localhost:8080/Club-FC-Shinigami/%22%3E<br>FC Shinigami"."<br>";
echo "<a href="."http://localhost:8080/Club-FC-ESPADA/%22%3E<br>FC ESPADA"."<br>";
echo "<a href="."http://localhost:8080/Club-FC-FRAUDE/%22%3E<br>FC FRAUDE"."<br>";



