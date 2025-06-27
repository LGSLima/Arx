<?php
    include("connection_db.php");

    session_start();

    $nick_user = $_POST['nick_user'];
    $password_user = $_POST['password_user'];

    $sql = "SELECT * FROM Cad_User WHERE Nick_User = '$nick_user'";
    
    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password_user, $user['Password_User'])) {
        $_SESSION['user'] = $user['Nick_User'];
        header("Location: application.php");
    } else {
        echo "Email ou senha incorretos.";
    }
?>