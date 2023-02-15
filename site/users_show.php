<?php

require 'database.php';

$id = $_GET['id'];


$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id ");
$stmt->bindParam(':id', $id);
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$user = $stmt->fetch();

// var_dump($user);

//echo "Details van " . $user['first_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <b><?php echo "Details van " . $user['first_name'] ." ". $user['last_name'] ?></b>
    </div>
</body>

</html>