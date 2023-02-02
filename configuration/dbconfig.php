<?php

class DbConfig{
    
    
    private $host = "localhost";
    private $user = "root";
    private $pwd = "root";
    private $dbName = "";

    protected function connect()
    {
        $conn = new mysqli($host, $user, $pwd, $dbName);

        if($conn->connect_error){
            die("Connection failed". $conn->connect_error);
        }
        // $dsn = 'mysql:host=' . $this->host . 'dbname=' . $this->dbName;
        // $pdo = new PDO($dsn, $this->user, $this->pwd);
        // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // return $pdo;
    }
}
