<?php

namespace app\models;

class Database{

    public $dsn;
    public $user;
    public $pass;
    public \PDO $conn;


    public function __construct(){

        $this->dsn='mysql:host=localhost;dbname=user';
        $this->user= 'root';
        $this->pass= '';

        $this->conn = new \PDO($this->dsn, $this->user, $this->pass);
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->conn;

        
    }

}



?>
