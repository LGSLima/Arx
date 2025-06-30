<?php
    include("connection_db.php");
    session_start();

    // Evita warnings se POST estiver vazio
    $user_nickname = $_POST['user_nickname'];
    $user_password = $_POST['user_password'];

    // Escapar para evitar SQL Injection simples
    $user_nickname = mysqli_real_escape_string($connection, $user_nickname);

    $sql = "SELECT User_Password AS user_password, User_Nickname AS user_nickname, User_Name As user_name FROM users WHERE User_Nickname = '$user_nickname'";
    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);

    // Verificação da senha
    if ($user && password_verify($user_password, $user['user_password'])) {
        if (!isset($user['user_name'])) {
            $_SESSION['user'] = $user['user_nickname'];
        } else {
            $_SESSION['user'] = $user['user_name'];
        }

        header("Location: application.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos.";
    }
?>
