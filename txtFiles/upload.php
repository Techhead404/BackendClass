<?php
    $tempName = $_FILES["datafile"];
    $path = "data";
    $fileName = $path . DIRECTORY_SEPARATOR . $tempName["name"];

    $success = move_uploaded_file($tempName["tmp_name"], $fileName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.php">Back</a>
    <br>
    <?php
        $file = fopen("fileName", "r");
        $stocks = array();

    while(!feof($file)) {
        $stock = fgetcsv($file);
        $stocks[] = $stock;
    }
    fclose($file);

    ?>
</body>
</html>