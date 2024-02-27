<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if ($_POST['voornaam'] == '') {
        echo "Je moet nog een naam invullen!";
        echo "<br><a href=\"form.html\">Terug naar het formulier</a>";
    };

    if ($_POST['adres'] == '') {
        echo "Je moet nog een adres invullen!";
        echo "<br><a href=\"form.html\">Terug naar het formulier</a>";
    };

    if ($_POST['email'] == '') {
        echo "Je moet nog een email invullen!";
        echo "<br><a href=\"form.html\">Terug naar het formulier</a>";
    };

    if ($_POST['wachtwoord'] == '') {
        echo "Je moet nog een wachtwoord invullen!";
        echo "<br><a href=\"form.html\">Terug naar het formulier</a>";
    };



?>
</body>
</html>