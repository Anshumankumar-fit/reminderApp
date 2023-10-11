<?php
include 'header.php';
?>

<section class="enable-container">
    <div class="top-bar-choose">
        <input type="date" id="date">
        <select name="subject" id="subject">
            <option value="s1">AIML</option>
            <option value="s2">IOT</option>
            <option value="s3">DATA SCIENCE</option>
            <option value="s4">COULD COUMPTING</option>
        </select>
    </div>
    <div id="mydata">

    </div>


    <div id="myform">

    </div>

</section>
<div class="buttons-containers">
    <a href="remiderapp.php">Back</a>
    <a href="addrem.php">Set Reminder</a>
    <a href="modifyrem.php">Modify Remider</a>
    <a href="#">Disable reminder</a>
    <a href="delete.php">Delete reminder</a>
    <a href="enable.php">Enable Reminder</a>
    <a href="viewrem.php">Views yours Reminder</a>

</div>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#logout-btn").on("click", function() {
            if (confirm("OK to logOut")) {
                window.location.assign(
                    "http://localhost/reminder-app/app/logout.php",
                );
            }
        });
        onLoad();

        function onLoad() {
            $.ajax({
                url: "enablerem.php",
                type: "POST",
                data: {
                    load: 'load'
                },
                success: function(data) {
                    $("#mydata").html(data);
                }
            });
        }

        $("#date").on("change", function() {
            var date = $(this).val();
            $.ajax({
                url: "enablerem.php",
                type: "POST",
                data: {
                    date: date
                },
                success: function(data) {
                    $("#mydata").html(data);
                }
            });
        });

        $("#subject").on("change", function() {
            var option = $(this).val();
            // console.log(option);
            $.ajax({
                url: "enablerem.php",
                type: "POST",
                data: {
                    option: option
                },
                success: function(data) {
                    $("#mydata").html(data);
                }
            });
        });
        $(document).on("click", "#enable-rem", function() {
            var id = $(this).data("enable");
            $.ajax({
                url: "enablerem.php",
                type: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#myform").html(data);
                }
            });
        });

        $(document).on("click", "#sub-enable", function(event) {
            event.preventDefault();
            var idd = $(this).data("rid");
            var desc = $("#desc").val();
            var email = $("#email").val();
            var cnumber = $("#cnumber").val();
            var smsnumber = $("#smsnumber").val();
            var chck = $('#chek').val();
            console.log(idd);
            $.ajax({
                url: "enablerem.php",
                type: "POST",
                data: {
                    idd : idd,
                    type : 'update',
                    desc :desc,
                    email :email,
                    cnumber : cnumber,
                    smsnumber : smsnumber ,
                    chck :chck
                },
                success: function(data) {
                    // console.log(data);
                    if(data == "done"){
                        onLoad();
                        // console.log("data");
                    }
                    
                }
            });
        });

    });
</script>
</body>

</html>