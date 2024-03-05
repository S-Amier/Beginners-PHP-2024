<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr Wheely</title>
</head>
<body>

<form action="index.php" method="get">
    <label for="minPrijs">Minimale prijs:</label>
    <input type="text" name="minPrijs" id="minPrijs">
    <label for="maxPrijs">Maximale prijs:</label>
    <input type="text" name="maxPrijs" id="maxPrijs">
    <input type="submit">
</form>

<?php

    require("Auto.php");
    require("Autooverzicht.php");

    $minPrijs = isset($_GET['minPrijs']) && !empty($_GET['minPrijs']) ? $_GET['minPrijs'] : 0;
    $maxPrijs = isset($_GET['maxPrijs']) && !empty($_GET['maxPrijs']) ? $_GET['maxPrijs'] : 999999999;

    $autoos = new Autooverzicht();
    $autoos->voegAutoToe('Opel', 300, '//unsplash.it/197/97');


    foreach ($autoos->getGefilterdeLijst($minPrijs, $maxPrijs) as $auto) {
        echo $auto->getMerk() . ' - ' . $auto->getPrijs() . '<br>';
        echo '<img src="'. $auto->getImageUrl() . '"alt="Plaatje van een auto"><br>';
    }
    
?>
</body>
</html>