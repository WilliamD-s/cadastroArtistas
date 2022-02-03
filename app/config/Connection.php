<?php

class Connection
{
    private $dbHost;
    private $dbName;
    private $dbUser;
    private $dbPassword;

    function __construct()
    {  
        $this->dbName = 'seu_db';
        $this->dbHost = "seu_host";
        $this->dbUser = "seu_user";
        $this->dbPassword = "sua_password";
    }

    public function getConnection(){
        try
        {
             $connection = new PDO('mysql:host='. $this->dbHost .';dbname=' . $this->dbName, $this->dbUser, $this->dbPassword); 
             
             $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
             
             return $connection;

        }catch(PDOException  $e)
        {
            echo "Erro: " . $e->getMessage();
        }
    }
}