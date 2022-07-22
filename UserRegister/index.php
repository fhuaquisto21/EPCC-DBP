<?php
    //session_start();
    if (isset($_SESSION["username"])) {
        header("Location: ./pages/dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/login.css">
        <title>User Register</title>
    </head>
    <body>
        <header>
            <h1>Fabricio Huaquisto Quispe</h1>
            <span>User Resgister</span>
        </header>
        <section>
            <form action="./pages/login.php" onsubmit="return verifyData()" method="POST">
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" id="username" name="username">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" name="password">
                </div>
                <input type="submit" value="Sign In">
            </form>
        </section>
        <script src="./js/main.js"></script>
    </body>
</html>