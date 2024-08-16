<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "database.php";
        global $db;

        $apiKey = bin2hex(random_bytes(16)); // Generates a 32-character hex string

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "INSERT INTO users (email, api_key) VALUES (:email, :apiKey)";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':apiKey', $apiKey);
        $stmt->execute();
        $qry = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "User added successfully! API Key: $apiKey";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.html">Home</a>
    <h1>Register</h1>
    <form action="register.php" method="post">
    <p>Username: <input type="text" name="email"></p>
            
    <input type="submit" value="Register"/>
        
    </form>

</body>
</html>