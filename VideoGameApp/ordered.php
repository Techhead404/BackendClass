<?php
$orderData = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'game_id' => $_POST['game_id'],
    'quantity' => $_POST['quantity']
];

$file = fopen('orders.csv', 'a');
fputcsv($file, $orderData);
fclose($file);

$games = array_map('str_getcsv', file('games.csv'));
$orderedGame = [];

foreach($games as $game){
    if($game[0] === $_POST['game_id']){
        $orderedGame = $game;
        break;
    }
}

echo "Thank you for your order, " . $_POST['first_name'] . " " . $_POST['last_name'] . "!";
echo "<p>You ordered " . $_POST['quantity'] . " copies of " . $orderedGame[1] . ".</p>";