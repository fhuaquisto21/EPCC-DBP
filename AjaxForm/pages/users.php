<?php
    include "../database/db.php";

    $dni = (int)$_POST["dni"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = (int)$_POST["phone"];

    $query = "INSERT INTO clientes(dni, nombre, apellido, correo, telefono) VALUES ('$dni', '$name', '$lastname', '$email', '$phone')";
    $conn -> query($query);
    $query = "SELECT * FROM clientes";
    $result_clients = $conn -> query($query);

    while ($row = mysqli_fetch_array($result_clients)) {
        echo "<tr>";
        echo "<th>" . $row['dni'] . "</th>";
        echo "<th>" . $row['nombre'] . "</th>";
        echo "<th>" . $row['apellido'] . "</th>";
        echo "<th>" . $row['correo'] . "</th>";
        echo "<th>" . $row['telefono'] . "</th>";
        echo "</tr>";
    }
?>