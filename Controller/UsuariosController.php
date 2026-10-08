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
}
