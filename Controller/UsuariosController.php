<?php

class UsuariosController
{

    public static function formCadastro()
    {

        //include "Model/usuarioModel.php";

        include 'View/Modules/Usuarios/formCadastro.php';
    }
    public static function saveUser()
    {
        include_once 'Model/UserModel.php';

        $model = new UserModel();
        $model->email = $_POST['inputCadEmail'];
        $model->senha = $_POST['inputCadSenha'];

        $model->formCadastroLogin();
    }
}
