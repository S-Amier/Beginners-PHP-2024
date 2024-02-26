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
            .rood {
                border: red solid 5px;
            }
            .green {
                border: green solid 5px;
            }
        </style>
</head>
<body>
<?php
    for( $i = 1; $i <=9 ;$i++ ) {
        if($i %2 ==0) {
            $class = "class='rood'";
        } else {
            $class = "class='green'";
        }
        echo  "<img ".$class. "src='img/apen/aap".$i.".jpg'>";
    }
?>
</body>
</html>