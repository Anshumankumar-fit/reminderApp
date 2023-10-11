<?php
session_start();
require '../db_connect.php';
$output="";
$sql = mysqli_query($conn, "SELECT * FROM reminders WHERE username = '{$_SESSION['username']}' ");
if(mysqli_num_rows($sql)> 0){
    $output .="<table>
                <tr>
                    <th>Remider Name</th>
                    <th>Subject</th>
                    <th>Decription</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>SMS Number</th>
                    <th>Status</th>
                    <th>Recur Fre</th>
                    <th>Checkbox</th>
                </tr>";
    while($results = mysqli_fetch_assoc($sql)){
        if($results['date'] == $_POST['date'] ){
            $output .="<table>
                <tr>
                    <th>".$results['rid']."</th>
                    <th>".$results['subject']."</th>
                    <th>".$results['desc']."</th>
                    <th>".$results['email']."</th>
                    <th>".$results['number']."</th>
                    <th>".$results['smsnumber']."</th>
                    <th></th>
                    <th>".$results['next']."</</th>
                    <th>Checkbox</th>
                </tr>";
        }
        
    }
    $output .="</table>";
}

echo $output;