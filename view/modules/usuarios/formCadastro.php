<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/modules/usuarios/styleFormCad.css">
    <title>Cadastre-se</title>
</head>

<body>
    
        <form action="/user/saveUser" method="POST">
            <h3>Formulário de Cadastro</h3>
            <input type="email" name="inputCadEmail" placeholder="digite seu e-mail">
            <input type="password" name="inputCadSenha" placeholder="digite sua senha">
            <input type="submit" value="Salvar" class="buttonSubmit">

        </form>

    
</body>

</html>