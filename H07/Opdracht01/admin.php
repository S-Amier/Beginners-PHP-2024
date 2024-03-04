<?php
    session_start();

   if(isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op het admingedeelte van de website</h1>";
    echo "<p><a href= 'login07.php'>login</a></p>";

} else {
    header('location: login07.php');
    // terug naar inlogscherm

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>