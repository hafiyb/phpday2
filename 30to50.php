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

$sum = 0;

for($i = 30;$i <= 50;$i++){
    if($i%2 == 1){
        $sum += $i;
    }
}

echo "<h1> $sum </h1>"

?>
</body>
</html>