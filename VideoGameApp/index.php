<?php
$games = array_map('str_getcsv', file('games.csv'));
array_shift($games);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "cdn.php"?>
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        include "ordered.php";
    }
    else{
        include "orderForm.php";
    }
    ?>
</body>
</html>