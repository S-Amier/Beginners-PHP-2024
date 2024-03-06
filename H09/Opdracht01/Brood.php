<?php
session_start();

class Brood {

    private $naam;
    private $meel;
    private $vorm;
    private $gewicht;


    function __construct($naam, $meel, $vorm, $gewicht) {
        $this->naam = $naam;
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    function getNaam() {
        return $this->naam;
    }

    function getMeel() {
        return $this->meel;
    }

    function getVorm() {
        return $this->vorm;
    }

    function getGewicht() {
        return $this->gewicht;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }
    
    function setMeel($meel) {
        $this->meel = $meel;
    }

    function setVorm($vorm) {
        $this->vorm = $vorm;
    }

    function setGewicht($gewicht) {
        $this->gewicht = $gewicht;
    }
}