<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../loginscss/login.css">
</head>
<body>
    <main>
        <div class="login-form">
            <form method="POST">
                <div class="login">
                    <input type="text" required placeholder="Fullname or email">
                    <br>
                    <input type="password" required placeholder="password">
                    <br>
                    <a>Login</a>
                </div>
                <div class="forgot-password">
                    <a href="#">Sign Up</a>
                    <a href="#">Forgot Your Password ?</a>
                </div>
            </form>
        </div>
    </main>
    <?php 
      session_start();
     include("../database.php");

    ?>
</body>
</html>