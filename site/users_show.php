<?php

$id = $_GET['id'];


$stmt = $conn->prepare("SELECT * FROM users");
$stmt->bindParam(':id', $id);
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$user = $stmt->fetchAll();

// var_dump($user);

echo "Details van " . $user['first_name'];