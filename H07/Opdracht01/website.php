<?php
    session_start();

   if(isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website</h1>";
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