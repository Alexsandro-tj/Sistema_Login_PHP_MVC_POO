<?php

class UserModel
{

    public string $email, $senha;
    public object $registro;


    public function formCadastroLogin()
    {
        include_once __DIR__ . '/../DAO/UserDAO.php';
        $dao = new UserDao();
        $dao->insert($this);
    }
    public function verificaCredencias()
    {
        include_once __DIR__ . '/../DAO/UserDAO.php';
        $daoVerificaCredenciais = new UserDao();
        $daoVerificaCredenciais->selectUser($this);
        return $this->registro = $daoVerificaCredenciais;
    }
}
