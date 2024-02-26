<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdstuk 3</title>
        <style>
            body {
                text-align: center;
            }
        </style>
</head>
<body>
<?php
   $leeftijd = 12;
   $bedrag = 10;
   if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
   }

   if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
   }

   if($leeftijd < 3) {
    $bedrag = 0;
   }

   echo $bedrag;
?>
</body>
</html>