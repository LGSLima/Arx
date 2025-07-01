<?php
    // Conecta ao banco de dados MySQL
    $connection = mysqli_connect("localhost", "root", "", "arx");
    if (!$connection) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
?>