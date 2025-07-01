<?php
    include("connection_db.php");
    session_start();

    // Evita warnings se POST estiver vazio
    if (!isset($_POST['user_nickname']) || !isset($_POST['user_password'])) {
        echo "<script>
                alert('Preencha todos os campos.');
                window.location.href = '../index.html';
            </script>";
        exit;
    }
    // Captura e sanitiza os dados do formulário
    $user_nickname = $_POST['user_nickname'];
    $user_password = $_POST['user_password'];

    // Impede SQL Injection
    $user_nickname = mysqli_real_escape_string($connection, $user_nickname);

    // Faz a consulta ao banco de dados
    $sql = "SELECT User_Password AS user_password, User_Nickname AS user_nickname, User_Name As user_name FROM users WHERE User_Nickname = '$user_nickname'";
    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);

    // Verifica se o usuário existe e se a senha está correta
    if ($user && password_verify($user_password, $user['user_password'])) {
        // Inicia a sessão e armazena o nome do usuário
        if (empty($user['user_name'])) {
            $_SESSION['user'] = $user['user_nickname'];
        } else {
            $_SESSION['user'] = $user['user_name'];
        }
        // Redireciona para a página de boas-vindas
        header("Location: welcomepage.php");
        exit;
    } else {
        // Se o usuário ou senha estiverem incorretos, exibe um alerta e redireciona para a página de login
        echo "<script>
                alert('Usuário ou senha incorretos. Tente novamente.');
                window.location.href = '../index.html';
            </script>";
        exit;
    }
?>
