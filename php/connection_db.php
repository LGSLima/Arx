<?php
    $connection = mysqli_connect("localhost", "root", "", "arx");
    if (!$connection) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
?>