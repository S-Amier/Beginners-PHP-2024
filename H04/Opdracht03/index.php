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
function reversedString($string) {
    return strrev ($string);
}

$string = "Hello World!";
echo reversedString($string);
?>
</ul>
</body>
</html>