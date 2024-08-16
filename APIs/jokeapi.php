<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    include "database.php";
    global $db;

    function validate(){
        global $db;
        // $sql = "SELECT * FROM users WHERE api_key = '$key'";
        
        $key = $_GET['key'];
        $sql = "SELECT * FROM users WHERE api_key = :key";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':key', filter_input(INPUT_GET, 'key', FILTER_SANITIZE_SPECIAL_CHARS));
        $stmt->execute();

        $qry = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($qry) > 0){
            return true;
        }
    }

    $sql = "SELECT * FROM coding_jokes";

    if(isset($_GET['id']) && validate()){
        $sql .= " WHERE Joke_ID = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $stmt->execute();
        $qry = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($qry);
    }else{
        echo "Invalid API Key";
    }

    if(isset($_GET['all']) && validate()){
        $sql = "SELECT * FROM coding_jokes";
        $qry = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($qry);
    }

    if(isset($_GET['random']) && validate()){
        $sql = "SELECT * FROM coding_jokes ORDER BY RAND() LIMIT 1";
        $qry = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($qry);
    }

?>

