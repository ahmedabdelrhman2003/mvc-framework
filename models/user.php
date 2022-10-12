<?php
namespace app\models;
use app\core\Application;
class user{
public function getuser($username,$password){
    $q = "SELECT * FROM identity WHERE Name1 = :username AND Password1 = :pass";
    $stmt = Application::$app->db->conn->prepare($q);
    $stmt->execute(
        array(
            'username' => $_POST['Name'],
            'pass' => md5($_POST['password1'])
        )
        );

        return $stmt->rowCount()> 0;

}

}