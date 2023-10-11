<?php

session_start();
require '../db_connect.php';
// set the default timezone to use.
date_default_timezone_set('UTC');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reminder APP</title>
</head>
<body>
    <div class="bar">
        <div class="username">
            Welcome to reminder App -> <?php echo $_SESSION['username']; ?>
        </div>
        <div class="date"><?php echo "Today is ".date('l jS \of F')." ."; ?></div>
        <div class="logout">
            <a id="logout-btn">Logout</a>
        </div>
    </div>