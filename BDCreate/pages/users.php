<?php
    include "../database/db.php";

    $dni = (int)$_POST["dni"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = (int)$_POST["phone"];

    $query = "INSERT INTO clientes(dni, nombre, apellido, correo, telefono) VALUES ('$dni', '$name', '$lastname', '$email', '$phone')";
    $conn -> query($query);
    header("Location: ../index.php");
?>