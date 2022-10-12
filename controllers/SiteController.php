<?php
namespace app\controllers;
use app\core\Application;
use app\core\controller;
use  app\models\Database;
class SiteController extends controller{
    public function home(){
        // $user=$_POST['firstName'];
        // $pw=$_POST['password'];
        // $encryptedpw = md5($pw);
        // $q = "INSERT INTO Persons (first_name, user_password) VALUES ('$user', '$encryptedpw')";
        // $stmt = Application::$app->db->conn->prepare($q);
        //     $stmt->execute();
        $params = [
    'name' => "ahmed"
        ];
        return $this-> render('home',$params=[]);
    }
    public function Contact(){
     $body =  Application::$app->request->getBody();
    //  var_dump($body);
    //  exit();
     return $this-> render('login',$params= []);
    }
}