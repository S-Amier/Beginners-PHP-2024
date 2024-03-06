<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakkerij Wim Vlecht</title>
</head>
<body>
    <h1> Bakkerij Wim Vlecht</h1>
    <h2> Brood toevoegen</h2>

<form action="index.php" method="get">
    <label for="broodNaam">Naam brood:</label>
    <input type="text" name="broodNaam"id="broodNaam"><br>
    <label for="broodMeel">Meel:</label>
    <input type="text" name="broodMeel" id="broodMeel"><br>
    <label for="broodVorm">Vorm:</label>
    <input type="text" name="broodVorm" id="broodVorm"><br>
    <label for="broodGewicht">Gewicht (in gram):</label>
    <input type="text" name="broodGewicht" id="broodGewicht"><br>
    <input type="submit" value="Brood toevoegen">
</form>

<h2> Brood Inventarisatie</h2>
<?php

    require("Brood.php");
    require("Broodoverzicht.php");

    $broden = new Broodoverzicht();

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        $naam = isset($_GET['broodNaam']) ? $_GET['broodNaam'] : null;
        $meel = isset($_GET['broodMeel']) ? $_GET['broodMeel'] : null;
        $vorm = isset($_GET['broodVorm']) ? $_GET['broodVorm'] : null;
        $gewicht = isset($_GET['broodGewicht']) ? $_GET['broodGewicht'] : null;

        $broden->voegBroodToe($naam, $meel, $vorm, $gewicht);
    }


    foreach ($broden->getGefilterdeLijst($naam, $meel, $vorm, $gewicht) as $brood) {
        echo $brood->getNaam() . ' - ' . $brood->getMeel() . ' - ' . $brood->getVorm() . ' - ' . $brood->getGewicht() . '<br>';
    }
    
?>
</body>
</html>