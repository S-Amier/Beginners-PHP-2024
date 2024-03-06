<?php

class Broodoverzicht {

    private $broden;

    function __construct() {
        $this->broden = [
            new Brood("Brood1", "witte", "rond", 500.00),
            new Brood("Brood2", "bruine", "rechthoek", 650.00,),
            new Brood("Brood3", "rogge","rechthoekig", 10500.00,)
        ];
    }

    function getBroodLijst() {
        return $this->broden;
    }


    function voegBroodToe($naam, $meel, $vorm, $gewicht){
        $newBrood = new Brood($naam, $meel, $vorm, $gewicht);
        $this->broden[] = $newBrood;
    }

    function getGefilterdeLijst($naam, $meel, $vorm, $gewicht) {
        $gefilterdeLijst = [];
        foreach ($this->broden as $brood) {
            if ($brood->getNaam() == $naam || 
                $brood->getMeel() == $meel ||
                $brood->getVorm() == $vorm ||
                $brood->getGewicht() == $gewicht) {
                $gefilterdeLijst[] = $brood;
            }
        }
        return $gefilterdeLijst;
    }
}
