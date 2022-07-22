<?php
    session_start();
    include "./session.php";
    $username = $_POST["username"];
    $password = sha1($_POST["password"], false);
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location: ../pages/dashboard.php");
?>