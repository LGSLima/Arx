
<?php
    // Inicia a sessão e destrói todas as variáveis de sessão
    // Redireciona para a página inicial após o logout
    session_start();
    session_destroy();
    header("Location: ../index.html");
?>