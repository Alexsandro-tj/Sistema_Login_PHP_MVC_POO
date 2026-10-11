<?php

class UsuariosController
{

    public static function formCadastro()
    {

        //include "Model/usuarioModel.php";

        include __DIR__ . '/../view/modules/usuarios/formCadastro.php';
    }
    public static function saveUser()
    {
        include __DIR__ . '/../Model/UserModel.php';

        $model = new UserModel();
        $model->email = $_POST['inputCadEmail'];
        $model->senha = password_hash($_POST['inputCadSenha'], PASSWORD_DEFAULT, ['cost' => 10]);

        $model->formCadastroLogin();
        header('location:/');
    }

    public static function checkLogin()
    {
        include __DIR__ . '/../Model/UserModel.php';
        $modelCheckLogin = new UserModel();
        $modelCheckLogin->email = $_POST['inputEmail'];
        $senhaLogin = $_POST['inputPwd'];
        $modelCheckLogin->verificaCredencias();

        $registro = $modelCheckLogin->registro;

        // aqui lógica para pegar as credencias do banco por meio do obeto
        /* $modelCheckLogin. Após isso verificar com a senha por meio da veriavel $senhaLogin */
        if (
            !empty($registro) &&
            $senhaLogin == $registro[0]['senha']
        ) {
            include_once __DIR__ . '/../view/modules/usuarios/dashBoard.php';
        } else {
            header('location:/');
            echo "<p>Erro. Tente novamente!</p>";
        }
    }
}
