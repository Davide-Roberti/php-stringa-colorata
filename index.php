<?php

    $password = $_GET['password'];
    if ($password == 'Boolean') {
        echo "<p style='color:green'>VERDE</p>";
    } else {
        echo "<p style='color:red'>ROSSO</p>";
    }

    // VERSIONE ALTERNATIVA
    // $password = $_GET['password'];
    // if ($password == 'Boolean') {
    //     echo "<p>una stringa verde</p>";
    // } else {
    //     echo "<p>una stringa rossa</p>";
    // }


 ?>
