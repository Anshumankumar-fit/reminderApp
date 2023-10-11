<?php

include 'header.php';

?>

<section class="view-rem">

    <input type="date" id="date">
</section>
<div id="mydata">


</div>




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
        onload();

        function onload() {
            $.ajax({
                url: "deleterem.php",
                type: "GET",
                success: function(data) {
                    $("#mydata").html(data);
                }
            });
        }


        $("#date").on("change", function() {
            var date = $(this).val();
            // console.log(date);
            $.ajax({
                url: "main.php",
                type: "POST",
                data: {
                    date: date
                },
                success: function(data) {
                    // console.log(data);
                    $("#mydata").html(data);
                }
            });
        });
        $(document).on('click', '#delete-rem', function() {
            var remID = $(this).data("delete");
            $.ajax({
                url: "dele.php",
                type: "POST",
                data: {
                    remID: remID
                },
                success: function(data) {
                    if (data == "done") {
                        onload();
                    }
                    // console.log(data);

                }
            });
            console.log(remID);
        })

    });
</script>
</body>

</html>