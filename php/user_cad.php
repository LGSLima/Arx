<?php
    include("connection_db.php");

    $nick_user = $_POST['nick_user'];
    $email_user = $_POST['email_user'];
    $password_user = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
    $birthday_date_user = $_POST['birthday_date_user'];

    $sql = "INSERT INTO Cad_User (Nick_User, Email_user, Password_User, Birthday_Date_User) VALUES ('$nick_user', '$email_user', '$password_user', '$birthday_date_user')";

    if (mysqli_query($connection, $sql)) {
        echo "Usuário cadastrado com sucesso.";
    } else {
        echo "Erro: " . mysqli_error($connection);
    }
    header("Location: /Github/Arx/index.html");
?>