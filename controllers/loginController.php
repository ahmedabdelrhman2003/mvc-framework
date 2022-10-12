<?php
namespace app\controllers;
use app\core\Application;
use app\core\controller;
use app\models\user;
session_start();
class loginController extends controller {
    private $model;
    public function __construct()
    {
     $this->model=new user();
    }
    public function login(){

    
         $user = $_POST["Name"];
         $pw = $_POST["password1"];

        if (!empty($user) AND !empty($pw)) {
       $count = $this->model->getuser($user,$pw);
                if($count > 0) {
                    $_SESSION["username"] = $_POST['Name'];
                     header("location:http://localhost:8080/home");
                    // return $this-> render('home',$params= []);
                }
                else {
                    $message = '<label>Username Or Password is incorrect</label>';
                    echo $message;
                }


        } else {


            // echo '<p> please enter username and passwords </p>';
            return $this-> render('login',$params= []);
        }
        
    }
    public function signup(){
        $q = "SELECT * FROM identity WHERE Name1 = :username";
        $stmt = Application::$app->db->conn->prepare($q);
        $stmt->execute(
            array(
                'username' => $_POST['Name']
                
            )
            );
           $count= $stmt->rowCount();
           if($count==0){

           
        $user=$_POST['Name'];
        $pw=$_POST['password1'];
        $encryptedpw = md5($pw);
        $q = "INSERT INTO identity (Name1,password1) VALUES ('$user', '$encryptedpw')";
        $stmt = Application::$app->db->conn->prepare($q);
        $stmt->execute();
        $this->login();
    //   return header("location:../views/home.php");
        //  return $this-> render('home',$params= []);
        header("location:http://localhost:8080/home");}
        else{
            echo "<p>username already taken</p>";
        }

    }

    public function logout()
    {
         session_destroy();
        // return $this-> render('login',$params= []);
        header("location:http://localhost:8080/login");

    }
    public function newlogin(){
        if(isset($_SESSION["username"]))
        {
            header("location:http://localhost:8080/home");
            
        }
        else{
        return $this-> render('login',$params= []);
        }
    }
}
