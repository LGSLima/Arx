<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arx</title>
</head>
<body>
    <div>
        <form action="php/user_cad.php" method="POST">
            <label for="">Nome de Usuário: </label>
            <input type="text" name="nick_user" id="nick_user" required><br>
            <label for="">E-mail: </label>
            <input type="email" name="email_user" id="email_user" required><br>
            <label for="">Senha: </label>
            <input type="password" name="password_user" id="password_user" required><br>
            <label for="">Data de Nascimento: </label>
            <input type="date" name="birthday_date_user" id="birthday_date_user" required><br>   
            <button type="submit">Cadastrar</button><br>
            <a href="login.html">Fazer login</a>
        </form>
    </div>
</body>
</html>