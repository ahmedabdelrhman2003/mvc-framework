<?php

require_once __DIR__.'/../vendor/autoload.php';
//use app\models\RegisterModel;
use app\controllers\loginController;
use app\core\Application;
//use app\controllers\AuthController;
use app\core\Database;
$app = new Application(dirname(__DIR__));


$app->router->get('/', function () {
    echo 'Hello World';
});



// $app->router->get('/contact', function () {
    
    //     echo 'Contact';
    // });
    
    //$app->router->post('/contact', [SiteController::class,'handleContact']);
    // $app->router->get('/contact', [SiteController::class,'contact']);
    $app->router->get('/login', [loginController::class,'newlogin']);
    $app->router->get('/logout', [loginController::class,'logout']);
    
    $app->router->get('/home', 'home');

//  $app->router->get('/signup', [loginController::class,'signup']);
if(isset($_POST["login"]))
{
$app->router->post('/login', [loginController::class,'login']);
}
elseif(isset($_POST["signup"]))
{
     $app->router->post('/login', [loginController::class,'signup']);
}
else
{
    $app->router->get('/login', [loginController::class,'newlogin']); 
}
 

// $app->router->get('/login', 'login');
// $app->router->post('/login', [loginController::class,'profile']);
// $app->router->get('/login', [AuthController::class,'login']);
// $app->router->post('/login', [AuthController::class,'login']);
// $app->router->get('/signup', [AuthController::class,'signup']);
// $app->router->post('/signup', [AuthController::class,'signup']);



$app->run();


?>