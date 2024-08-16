<?php
    $file = fopen("stock.csv", "r");
    $stocks = array();

    while(!feof($file)) {
        $stock = fgetcsv($file);
        $stocks[] = $stock;
        print_r($stocks);
    }
    fclose($file);

?>