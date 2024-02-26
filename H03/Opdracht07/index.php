<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $kappersagenda = array ("Mevr.Pietersen", "Mevr. Willems", "", "Paul van den Broek", "Karel de Meeuw", "");
    $tijd = array (9.15, 9.30, 9.45, 10.00, 10.15, 10.30) ;

    
    print("De volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $tijd => $afspraak) {
        $kappersagenda = $afspraak;
        if ($afspraak =="") {
            print ("<li>".$tijd."</li>");
    }
}
print("</ul>");

    ?>
</body>
</html>