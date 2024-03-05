<?php

class Autooverzicht {

    private $autoos;

    function __construct() {
        $this->autoos = [
            new Auto('Audi', 102500.00, "//unsplash.it/200/100"),
            new Auto("Ferrari",99500.00,"//unsplash.it/199/99"),
            new Auto("Fiat",10500.00,"//unsplash.it/198/98")
        ];
    }

    function getAutoLijst() {
        return $this->autoos;
    }


    function voegAutoToe($merk, $prijs, $image_url){
        $newAuto = new Auto($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getGefilterdeLijst($minPrijs, $maxPrijs) {
        $gefilterdeLijst = [];
        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {
                $gefilterdeLijst[] = $auto;
            }
        }
        return $gefilterdeLijst;
    }
}