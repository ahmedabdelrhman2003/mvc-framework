<?php
namespace app\controllers;
use app\core\controller;
use app\models\RegisterModel;
class AuthController extends controller{
public function login(){

    return $this->render('login');
}
public function signup(Request $request){
  if($request->getMethod()){
    $registerModel = new RegisterModel();
    var_dump($request->getBody());
    echo 'fuck that';
  }
    return $this->render('signup');
}

}