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
    $string = "Hello there my name is Kevin";
    $count = 0;
    echo str_replace(" ", "%", $string, $count)."<br>Number of spaces replaced : $count";
?>
</body>
</html>