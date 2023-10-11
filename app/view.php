<?php
session_start();
require '../db_connect.php';
$output="";
$sql = mysqli_query($conn, "SELECT * FROM reminders WHERE username = '{$_SESSION['username']}'");
if(mysqli_num_rows($sql)> 0){
    $output .="<table style='width:100%'>
                <tr style='width:100%'>
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
        $output .="<table>
                <tr style='width:100%'>
                    <td style='width:100px'>".$results['rid']."</td>
                    <td style='width:100px'>".$results['subject']."</td>
                    <td style='width:100px'>".$results['desc']."</td>
                    <td style='width:100px'>".$results['email']."</td>
                    <td style='width:100px'>".$results['number']."</td>
                    <td style='width:100px'>".$results['smsnumber']."</td>
                    <td style='width:100px'></td>
                    <td style='width:100px'>".$results['next']."</</td>
                    <td style='width:100px'><button data-edit=".$results['rid']." id='edit-rem'>EDIT</button></td>
                </tr>";
    }
    $output .="</table>";
}

echo $output;