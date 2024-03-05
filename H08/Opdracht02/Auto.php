<?php

class Auto {

    private $merk;
    private $prijs;
    private $image_url;

    function __construct($merk, $prijs, $image_url) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->image_url = $image_url;
    }

    function getMerk() {
        return $this->merk;
    }

    function getPrijs() {
        return $this->prijs;
    }

    function getImageUrl() {
        return $this->image_url;
    }
    
    function setmerk($merk){
        $this->merk = $merk;

    }

    function setPrijs($prijs){
        $this->prijs = $prijs;
    }

}

?>