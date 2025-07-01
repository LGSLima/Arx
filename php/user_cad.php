<?php
    include("connection_db.php");

    // Verifica se as senhas inseridas são iguais
    if ($_POST['user_password'] !== $_POST['confirm_password']) {
        header("Location: signup.php?error=senha");
        exit;
    }

    // Faz a captura e sanitização dos dados do formulário
    $user_nickname = $_POST['user_nickname'];
    $user_email = $_POST['user_email'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
    $birthday_date = $_POST['birthday_date'];
    $user_name = $_POST['user_name'];
    $user_tel = $_POST['user_tel'];
    $user_img = $_FILES['user_img'];

    // Verifica se o campo de imagem foi enviado
    $check = "SELECT * FROM users WHERE user_nickname = '$user_nickname' OR user_email = '$user_email' OR user_tel = '$user_tel'";
    $res = mysqli_query($connection, $check);

    // Verifica se já existe um usuário com o mesmo nickname, email ou telefone
    if (mysqli_num_rows($res) > 0) {
        header("Location: signup.php?error=duplicado");
        exit;
    }

    // Faz a inserção dos dados no banco de dados
    $sql = "INSERT INTO users (user_nickname, user_email, user_password, birthday_date, user_name, user_tel, user_img)
    VALUES ('$user_nickname', '$user_email', '$user_password', '$birthday_date', '$user_name', '$user_tel', '$user_img')";

    // Executa a consulta
    if (mysqli_query($connection, $sql)) {
        // Se a inserção for bem-sucedida, redireciona para a página de sucesso
        header("Location: signup.php?success");
        exit;
    } else {
        // Se ocorrer um erro na inserção, redireciona com um erro
        header("Location: signup.php?error=bd");
        exit;
    }
?>