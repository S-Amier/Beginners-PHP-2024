<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functies</title>
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
function temperatureConvert($celsius) {
    $fahrenheit = ($celsius *9/5) +32;
    return $fahrenheit;
}

// aanroepen:
$celsius = 7;
$fahrenheit = temperatureConvert($celsius);
echo "$celsius degrees Celsius is equal to $fahrenheit degrees Fahrenheit.";
?>
</ul>
</body>
</html>