<?php

class UserDao
{

    private object $conexao;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost:3306;dbname=mydb';
        $this->conexao = new PDO($dsn, 'root', 'SANDRO.rd650');
    }

    public function insert(UserModel $model)
    {
        
        $sql = "INSERT INTO usuarios_login (email, senha) VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->email);
        $stmt->bindValue(2, $model->senha);
        $stmt->execute();
    }
}
