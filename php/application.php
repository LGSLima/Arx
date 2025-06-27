<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: /Github/Arx/login.html");
        exit();
    }
    $_SESSION['user'] = $_SESSION['user'] ?? 'Convidado';
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Página de Boas-Vindas</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f0f0f0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .welcome {
                background: white;
                padding: 2rem 3rem;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                font-size: 1.5rem;
                }
        </style>
    </head>
    <body>
        <div class="welcome">
            Bem-vindo, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!
            <br><br>
            <a href="logout.php">Sair</a>
        </div>
    </body>
</html>