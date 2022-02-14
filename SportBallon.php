<?php

class SportBallon extends sport
{
    private $largeur;
    private $longueur;

    /**
     * @param $largeur
     * @param $longueur
     * @param $nbJoueurs
     */
    public function __construct($nomSport, $nbJoueurs, $largeur, $longueur)
    {

        parent::__construct($nomSport, $nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getDescription(): string
    {
        return 'Description "Nom du sport : ' . $this->getNomSport() . " Nombre de joueur : " . $this->getNbJoueurs() . " Largeur : " . $this->largeur . " Longueur :" . $this->longueur .  '"<br>';
    }


}