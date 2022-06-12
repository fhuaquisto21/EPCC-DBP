<?php
    include "./database/db.php";

    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
    } else {
        $color = "green";
    }
?>

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
            <div class="form">
                <input type="text" placeholder="DNI" name="dni">
                <input type="text" placeholder="Nombre" name="name">
                <input type="text" placeholder="Apellido" name="lastname">
                <input type="email" placeholder="Email" name="email">
                <input type="text" placeholder="Teléfono" name="phone">
                <button onclick="validateForm()" style="background-color: var(--<?php echo $color?>);">Save Client</button>
            </div>
        </aside>
        <section class="clients">
            <div class="options">
                <h2>Clientes</h2>
                <select name="change_color" id="change_color" onchange="changeColor()">
                    <option value="red" <?php if($color == "red") { echo "selected"; } ?> >Rojo</option>
                    <option value="blue" <?php if($color == "blue") { echo "selected"; } ?> >Azul</option>
                    <option value="green" <?php if($color == "green") { echo "selected"; } ?> >Verde</option>
                    <option value="puple" <?php if($color == "puple") { echo "selected"; } ?> >Morado</option>
                </select>
            </div>
            <table>
                <thead>
                    <tr style="background-color: var(--<?php echo $color?>);">
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