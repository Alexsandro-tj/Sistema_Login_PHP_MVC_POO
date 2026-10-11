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

    
        
        // aqui lógica para pegar as credencias do banco por meio do obeto
        /* $modelCheckLogin. Após isso verificar com a senha por meio da veriavel $senhaLogin */
        if($senhaLogin == $modelCheckLogin->registro['senha']){
            // include_once __DIR__ .'/../view/modules/usuarios';
            echo "<p>Validação com sucesso!</p>";
        }else{
            echo "<p>Erro. Tente novamente!</p>";
        }
    }
}
