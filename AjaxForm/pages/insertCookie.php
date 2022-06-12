<?php
    $colorB = $_GET['color'];
    setcookie('color', $colorB, time() + 60 * 60 * 24 * 365, '/');
?>