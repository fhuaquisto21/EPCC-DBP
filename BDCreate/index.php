<?php include "./database/db.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Clientes</title>
    </head>
    <body>
        <aside class="register">
            <h2>Registro</h2>
            <form action="./pages/users.php" onsubmit="return validateForm()" method="POST">
                <input type="text" placeholder="DNI" name="dni">
                <input type="text" placeholder="Nombre" name="name">
                <input type="text" placeholder="Apellido" name="lastname">
                <input type="email" placeholder="Email" name="email">
                <input type="text" placeholder="Teléfono" name="phone">
                <input type="submit" name="save_client" value="Save Client">
            </form>
        </aside>
        <section class="clients">
            <h2>Clientes</h2>
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>TELÉFONO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM clientes";
                        $result_clients = $conn -> query($query);

                        while ($row = mysqli_fetch_array($result_clients)) { ?>
                            <tr>
                                <th><?php echo $row['dni']; ?></th>
                                <th><?php echo $row['nombre']; ?></th>
                                <th><?php echo $row['apellido']; ?></th>
                                <th><?php echo $row['correo']; ?></th>
                                <th><?php echo $row['telefono']; ?></th>
                            </tr>
                        <?php }
                    ?> 
                </tbody>
            </table>
        </section>
        <script src="./js/main.js"></script>
    </body>
</html>