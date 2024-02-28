<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$user = "schooluser";
$pass = "Schooluser01*";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phpschool;port:3306', $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;

} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
}

    // $dbh = new PDO("mysql:host=localhost;dbname=databasenaam;port=3306" ,
                    // "root","wachtwoord");

?>
</body>