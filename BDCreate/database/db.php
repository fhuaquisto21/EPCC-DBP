<?php
    $DDBB_HOST = "localhost";
    $DDBB_NAME = "lab06";
    $DDBB_PASSWORD = "fjhqPassword";
    $DDBB_USER = "fhuaquisto";
    $conn = new mysqli($DDBB_HOST, $DDBB_USER, $DDBB_PASSWORD, $DDBB_NAME);
    if ($conn -> connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    } 
?>