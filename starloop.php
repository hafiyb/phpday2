<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($i = 1;$i <= 5;$i++){
        for($j = 1;$j <= $i;$j++){
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br><br>";
    for($i = 1;$i <= 5;$i++){
        for($j = 1;$j <= $i;$j++){
            echo "* ";
        }
        echo "<br>";
    }
    for($i = 5;$i >= 1;$i--){
        for($j = 1;$j <= $i;$j++){
            echo "* ";
        }
        echo "<br>";
    }

?>
</body>
</html>