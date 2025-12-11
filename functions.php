<?php

$servername = "localhost";
$username = "root";
$password = "new_password";
$dbname = "rage_guard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getAllGames() {
    global $conn;
    $sql = "SELECT * FROM games";
    $result = $conn->query($sql);
    return $result;
}

function getComingSoonGames() {
    global $conn;
    $sql = "SELECT * FROM coming_soon";
    $result = $conn->query($sql);
    return $result;
}

function purchaseGame($userId, $gameId) {
    global $conn;
    $sql = "INSERT INTO orders (user_id, game_id, order_date) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $userId, $gameId);
    $stmt->execute();
}
?>