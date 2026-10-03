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
        include '/../model/UserModel.php';

        $model = new UserModel();
        $model->email = $_POST['inputCadEmail'];
        $model->senha = $_POST['inputCadSenha'];

        $model->formCadastroLogin();
    }
}
