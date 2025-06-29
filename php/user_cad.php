<?php
    include("connection_db.php");

    if ($_POST['user_password'] !== $_POST['confirm_password']) {
        echo "As senhas não coincidem.";
        exit;
    }

    $user_nickname = $_POST['user_nickname'];
    $user_email = $_POST['user_email'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $birthday_date = $_POST['birthday_date'];
    $user_name = $_POST['user_name'];
    $user_tel = $_POST['user_tel'];
    $user_img = $_POST['user_img'];

    $sql = "INSERT INTO users (user_nickname, user_email, user_password, birthday_date, user_name, user_tel, user_img)
    VALUES ('$user_nickname', '$user_email', '$user_password', '$birthday_date', '$user_name', '$user_tel', '$user_img')";

    if (mysqli_query($connection, $sql)) {
        echo "Usuário cadastrado com sucesso.";
    } else {
        echo "Erro: " . mysqli_error($connection);
    }
    header("Location: /Github/Arx/index.html");
?>