<?php
    include("connection_db.php");
    session_start();

    // Pega direto do POST, mas sem gerar warning se não existir
    $user_nickname = $_POST['user_nickname'] ?? '';
    $user_password = $_POST['user_password'] ?? '';

    $sql = "SELECT * FROM users WHERE user_nickname = '$user_nickname'";
    
    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($user_password, $user['user_password'])) {
        $_SESSION['user'] = $user['user_nickname'];
        header("Location: application.php");
        exit;
    } else {
        echo "Email ou senha incorretos.";
    }
?>