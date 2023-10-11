<?php

require 'db_connect.php';

session_start();

if (isset($_POST['login'])) {
    $hash =
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$_POST['username']}'");
    if (mysqli_num_rows($sql) > 0) {
        while ($results = mysqli_fetch_assoc($sql)) {
            if (password_verify($_POST['password'], $results['password'])) {
                $_SESSION = [
                    'username' => $results['username']
                ];
                header("Location: http://localhost/reminder-app/app/remiderapp.php");
            } else {
                echo "WRONG CRDENTIALS";
                echo "<a href='http://localhost/reminder-app/login.php'>Login</a>";
            }
        }
    } else {
        echo "USER NOT EXSITS";
        echo "<a href='http://localhost/reminder-app/login.php'>Login</a>";
    }
}

if (isset($_POST['signup'])) {
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '{$_POST['username']}'");
    if (mysqli_num_rows($sql) > 0) {
        echo "USER ALLREADY EXSITS";
        echo "<a href='http://localhost/reminder-app/login.php'>Login</a>";
    } else {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = mysqli_query($conn, "INSERT INTO user(username, password) VALUES('{$_POST['username']}','$hash');");
        if ($sql) {
            $_SESSION = [
                'username' => $_POST['username']
            ];
            header("Location: http://localhost/reminder-app/app/remiderapp.php");
        }
    }
}
