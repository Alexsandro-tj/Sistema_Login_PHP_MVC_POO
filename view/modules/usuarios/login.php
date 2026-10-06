

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php __DIR__ ?>/../view/modules/usuarios/style.css">
    <title>Pagina Inicial - Login</title>
</head>

<body>
    <form action="" method="post">

        <label>E-mail: </label>
        <input type="email" name="inputEmail" placeholder="Digite seu e-mail" required>

        <label>Senha: </label>
        <input type="password" name="inputPwd" placeholder="Digite sua senha" required>

        <input type="submit" value="Entrar" class="buttonSubmit">
        <!-- <a href="/formCadastro" target="_blank" rel="noopener noreferrer">Cadastre-se</a> -->
        <a href="/user/formCadastro">Cadastre-se</a>

    </form>


</body>

</html>
