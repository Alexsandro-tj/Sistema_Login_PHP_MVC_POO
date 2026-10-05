<?php

class UserDao
{

    private object $conexao;

    public function __construct()
    {
        /* $dsn = 'mysql:host=localhost:3306;dbname=mydb';
        $this->conexao = new PDO($dsn, 'root', 'SANDRO.rd650'); */
        $host = getenv('DB_HOST');
        $port = getenv('DB_PORT');
        $dataBase = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $password = getenv('DB_PASSWORD');
        $dsn = "mysql:host=$host;port=$port;dbname=$dataBase;charset=utf8mb4";

        $this->conexao = new PDO($dsn,$user,$password);

        $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
