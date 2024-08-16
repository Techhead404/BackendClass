<?php
    $dsn = "mysql:host=localhost;dbname=final_api";
    $username = "root";
    $password =  "";

    
    
    try {
        $db = new PDO($dsn, $username, $password);
        // echo "Connected to database successfully <br>";
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        // echo "Error: $error_message";
    }

?>