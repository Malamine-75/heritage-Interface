<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */

    public function __construct(string $nomsport, int $nbJoueurs, int $distance)
    {
        parent::__construct($nomsport, $nbJoueurs);
        $this->distance = $distance;
    }


    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    public function getDescription(): string
    {
        return 'Description "Nom du sport : ' . $this->getNomSport() . " Nombre de joueur : " . $this->getNbJoueurs() . " Distances : " . $this->distance . '"<br>';
    }

}