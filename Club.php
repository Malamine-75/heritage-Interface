<?php

class Club implements comparable

{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSports = array();

    public function __construct($idClub, $nomClub, $nbPoints)
    {
        $this->IdClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;

    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }

    /**
     * @return mixed
     */

    public function getLesSports()
    {
        return $this->lesSports;
    }

    public function AjouterSport(Sport $sport)
    {
        $this->lesSports = $sport;
    }

    public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }

    public function getDescription(): string
    {
            return 'Description " Id du club : ' . $this->idClub . " Nom du club : " . $this->nomClub . " Nombre de point : " . $this->nbPoints . "'<br>";
    }


}