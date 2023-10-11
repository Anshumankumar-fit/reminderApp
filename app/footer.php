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
                url: "view.php",
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

        $(document).on('click', '#edit-rem', function() {
            var remID = $(this).data("edit");
            window.location.assign(
                "http://localhost/reminder-app/app/modifyrem.php",
            );
        });

        $("#logout-btn").on("click", function() {
            if (confirm("OK to logOut")) {
                window.location.assign(
                    "http://localhost/reminder-app/app/logout.php",
                );
            }
        });
    });
</script>
</body>

</html>