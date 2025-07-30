<?php

session_start();
if (!isset($_SESSION['logged_in'])) {
    header('location: /index.php');
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
    Welcome, <?= $_SESSION['uname'] ?>
    <a href="logout.php">Logout</a>
</body>
</html>