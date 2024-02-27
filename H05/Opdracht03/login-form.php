<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function toegangVerlenen($email, $password) {
        //Toegestaande email/wachtwoord combinaties
        $toegestaandeCombi = array(
            "piet@worldonline.nl" => "doetje123",
            "klaas@carpets.nl" => "snoepje777",
            "truushendriks@wegweg.nl" => "arkiearkie201"
            );
        
        //Check of de combi's zijn toegestaan
        foreach ($toegestaandeCombi as $allowedEmail => $allowedPassword) {
            if ($email === $allowedEmail && $password === $allowedPassword) {
                return true; //Welkom bericht
            }
        }

        return false; //Sorry geen toegang bericht
    }

    // Aanroepen:
    $email = $_POST['email'];
    $password = $_POST['wachtwoord'];

    if (toegangVerlenen($email, $password)) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang!";
    }

?>
</body>