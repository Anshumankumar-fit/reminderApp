<?php

include 'header.php';

?>

<section class="set-reminder-container">
    <form action="" method="POST">
        <div class="form-input">
            Date : <input type="date" name="date">
        </div>
        <div class="form-input">
            <label for="cars">Choose a Subject:</label>
            <select name="subject">
                <option value="s1">AIML</option>
                <option value="s2">IOT</option>
                <option value="s3">DATA SCIENCE</option>
                <option value="s4">COULD COUMPTING</option>
            </select>
        </div>
        <div class="form-input">
            <textarea name="desc"cols="30" rows="10"></textarea>
        </div>
        <div class="form-input">
            <input type="email" name="email">
        </div>
        <div class="form-input">
            <input type="tel" name="cnumber">
        </div>
        <div class="form-input">
            <input type="tel" name="smsnumber">
        </div>
        <div class="form-input">
            Recur for next : <br><input type="checkbox" name="chec" value="7"> 7 dayas<br>
            <input type="checkbox" name="chec" value="5"> 5 dayas<br>
            <input type="checkbox" name="chec" value="3"> 3 dayas<br>
            <input type="checkbox" name="chec" value="2"> 2 dayas<br>
        </div>
        <div class="form-input">
            <input type="submit" name="setrem" value="setreminder">

        </div>
        

    </form>
</section>



<?php

if(isset($_POST['setrem'])){
    $sql = mysqli_query($conn, "INSERT INTO `reminders` (`date`, `subject`, `desc`, `email`, `number`, `smsnumber`, `next`, `username`) VALUES ('{$_POST['date']}', '{$_POST['subject']}', '{$_POST['desc']}', '{$_POST['email']}', '{$_POST['cnumber']}', '{$_POST['smsnumber']}', '{$_POST['chec']}', '{$_SESSION['username']}');");

    if($sql){
        echo " Remider Done ";
    }
}

?>


<?php

include 'footer.php';

?>


