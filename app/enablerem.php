<?php

session_start();
require '../db_connect.php';

if(isset($_POST['load'])){
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
                        <td style='width:100px'>".$results['enable']."</td>
                        <td style='width:100px'>".$results['next']."</</td>
                        <td style='width:100px'><button data-enable=".$results['rid']." id='enable-rem'>Enable</button></td>
                    </tr>";
        }
        $output .="</table>";
    }
    
    echo $output;
}


if(isset($_POST['date'])){
    $output="";
    $sql = mysqli_query($conn, "SELECT * FROM reminders WHERE username = '{$_SESSION['username']}' AND date = '{$_POST['date']}'");
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
                        <td style='width:100px'>".$results['enable']."</td>
                        <td style='width:100px'>".$results['next']."</</td>
                        <td style='width:100px'><button data-enable=".$results['rid']." id='enable-rem'>Enable</button></td>
                    </tr>";
        }
        $output .="</table>";
    }
    
    echo $output;
}

if(isset($_POST['option'])){
    $output="";
    $sql = mysqli_query($conn, "SELECT * FROM reminders WHERE username = '{$_SESSION['username']}' AND subject = '{$_POST['option']}'");
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
                        <td style='width:100px'>".$results['enable']."</td>
                        <td style='width:100px'>".$results['next']."</</td>
                        <td style='width:100px'><button data-enable=".$results['rid']." id='enable-rem'>Enable</button></td>
                    </tr>";
        }
        $output .="</table>";
    }
    
    echo $output;
}

if(isset($_POST['id'])){
    $sql = mysqli_query($conn, "SELECT * FROM reminders WHERE username = '{$_SESSION['username']}' AND rid = {$_POST['id']}");
    $output = "";
    if(mysqli_num_rows($sql)> 0 ){
        $output .="<form id='enable-form'>";
        while($results = mysqli_fetch_assoc($sql)){
            $output .='<div class="form-input">
            <textarea id="desc" name="desc" cols="30" rows="10">'.$results['desc'].'</textarea>
            </div>
            <div class="form-input">
                <input id="email" type="email" name="email" value="'.$results['email'].'">
            </div>
            <div class="form-input">
                <input id="cnumber" type="tel" name="cnumber" value="'.$results['number'].'">
            </div>
            <div class="form-input">
                <input id="smsnumber" type="tel" name="smsnumber" value="'.$results['smsnumber'].'">
            </div>
            <div class="form-input">
                Recur for next : <br><input id="chek" type="checkbox" name="chec" value="7"> 7 dayas<br>
                <input id="chek" type="checkbox" name="chec" value="5"> 5 dayas<br>
                <input id="chek" type="checkbox" name="chec" value="3"> 3 dayas<br>
                <input id="chek" type="checkbox" name="chec" value="2"> 2 dayas<br>
            </div>
            <div class="form-input">
                <input type="submit" data-rid="'.$results['rid'].'" id="sub-enable" name="setrem" value="Conform">

            </div>';

        }
        echo $output;
    }else{
        
    }

}

if(isset($_POST['type'])){
    $sql = mysqli_query($conn, "UPDATE `reminders` SET `desc` = '{$_POST['desc']}', `email` = '{$_POST['email']}', `number` = '{$_POST['cnumber']}', `smsnumber` = '{$_POST['smsnumber']}', `next` = '{$_POST['chck']}', `enable` = 1 WHERE `reminders`.`rid` = {$_POST['idd']};");

    if($sql){
        echo "done";
    }else{
        echo "failed";
    }
}

