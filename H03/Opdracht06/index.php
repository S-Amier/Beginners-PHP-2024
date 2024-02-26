<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwemclub</title>
    <style>
        .club {
            margin: 10 10 10 10;
        }
        .clubnaam {
            border: grey 5px solid;
            display: table;
        }
        .leden {
            border: grey 5px solid;
            display: table;
        }
    </style>
</head>
<body>
<ul>
<?php
$clubs = array("De spartelkuikens" => 25, "De waterbuffels" => 32, "Plonsmederin" => 11, "Bommetje" => 23);

foreach ($clubs as $club => $leden) {
    $icons = 0;
    for ($i = 0; $i < $leden; $i++) {
        $icons++;
        if($icons %5 == 0) {

        echo "<img src ='img/zwemmer.jpg'>";
        } else {
            echo "";
        }
    }
}
?>
</ul>
</body>
</html>