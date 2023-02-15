<?php

require 'database.php';

$stmt = $conn->prepare("SELECT id, first_name, last_name, email, password, ip_address FROM users");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$all_users = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>IP Address</th>
        </thead>

        <tbody>
            <?php foreach ($all_users as $user) { ?>

                <tr>
                    <td> <?php echo $user["id"] ?> </td>
                    <td> <?php echo $user["first_name"] ?> </td>
                    <td> <?php echo $user["last_name"] ?> </td>
                    <td> <?php echo $user["email"] ?> </td>
                    <td> <?php echo $user["password"] ?> </td>
                    <td> <?php echo $user["ip_address"] ?> </td>
                    <td> <a href="users_show.php?id= <?php echo $user["id"] ?>"> Bekijk Detail </a> </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>