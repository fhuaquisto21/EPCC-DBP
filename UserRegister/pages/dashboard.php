<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/dashboard.css">
        <title>Dashboard</title>
    </head>
    <body>
        <nav>
            <div class="title">
                <h2>User Register</h2>
            </div>
            <form action="./logout.php" method="post">
                <button type="submit">Logout</button>
            </form>
        </nav>
        <section>
            <form action="./uploadImages.php" method="POST" enctype="multipart/form-data">
                <label for="upload-image">
                    <img src="
                    <?php
                        if ($_SESSION["image"] != "") {
                            echo $_SESSION["image"];
                        }
                    ?>
                    "/>
                </label>
                <input type="file" name="upload-image" accept="jpg" id="upload-image">
                <h3><?php echo $_SESSION["username"]; ?></h3>
                <input type="submit" value="Upload Image">
            </form>
        </section>
    </body>
</html>