<?php
session_start();
require '../db_connect.php';
$output="";
$sql = mysqli_query($conn, "DELETE FROM reminders WHERE `rid` = {$_POST['remID']}");
if($sql){
    echo "done";
}
