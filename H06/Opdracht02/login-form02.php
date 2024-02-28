<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$user = $_POST['emailadres'];
$pass= $_POST['wachtwoord'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=loginform;port:3306', $user, $pass);
    foreach ($dbh->query('SELECT * from leden') as $row) {
        print_r($row);
    }
    $dbh = null;

} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
}

    function toegangVerlenen($user, $pass) {
        //Toegestaande email/wachtwoord combinaties
        $toegestaandeCombi = array(
            "piet@worldonline.nl" => "doetje123",
            "klaas@carpets.nl" => "snoepje777",
            "truushendriks@wegweg.nl" => "arkiearkie201"
            );
        
        //Check of de combi's zijn toegestaan
        foreach ($toegestaandeCombi as $allowedEmail => $allowedPassword) {
            if ($user === $allowedEmail && $pass === $allowedPassword) {
                return true; //Welkom bericht
            }
        }

        return false; //Sorry geen toegang bericht
    }

    // Aanroepen:
    $user = $_POST['emailadres'];
    $pass= $_POST['wachtwoord'];

    if (toegangVerlenen($user, $pass)) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang!";
    }

?>
</body>