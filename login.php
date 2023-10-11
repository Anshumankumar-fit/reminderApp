<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        section > div{
            padding:20px;
            background-color: orange;
        }
        .form-input{
            margin:5px;
        }
    </style>
</head>

<body>
    <section>
        <div>
            <form action="main.php" method="POST">
                <div class="form-input">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-input">
                    <input type="submit" value="login" name="login">
                </div>
            </form>
            <a href="http://localhost/reminder-app/signup.php">SignUp</a>
        </div>
    </section>
</body>

</html>