<?php

    include_once("programma.php");
    include_once("liedje.php");

    $ditprogramma = new Programma();
    $ditprogramma->setNaam("mijn eerste programma");
    $ditprogramma->setOmschrijving("Even testen");

    foreach ($ditprogramma->getProgramma() as $p) {
        echo $p."<br>";
    }

    $nieuwliedje = new Liedje("Dit is de titel", "rolling stones");
    echo $nieuwliedje->getTitel()."<br>";
    echo $nieuwliedje->getArtiest()."<br>";

    $ditprogramma->voegLiedjeToe($nieuwliedje);

    foreach ($ditprogramma->getLiedjes() as $liedje) {
        echo $liedje->getTitel()." - ". $liedje->getArtiest;
    }
