<?php
    $DDBB_HOST = "localhost";
    $DDBB_NAME = "practica06";
    $DDBB_PASSWORD = "";
    $DDBB_USER = "root";
    $conn = new mysqli($DDBB_HOST, $DDBB_USER, $DDBB_PASSWORD, $DDBB_NAME);
    if ($conn -> connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    } 
?>