<?php

class Sport implements ISport
{
    private $nomsport;
    private $nbJoueurs;

    /**
     * @param $nomsport
     * @param $nbJoueurs
     */
    public function __construct(string $nomsport,int $nbJoueurs)
    {
        $this->nomsport = $nomsport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return string
     */
    public function getNomsport(): string
    {
        return $this->nomsport;
    }

    /**
     * @return int
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    public function getDescription(): string
    {
        return 'Description "Nom du sport :' . $this->nomsport . ' Nombre de joueur :' . $this->nbJoueurs ."<br>";
    }



}