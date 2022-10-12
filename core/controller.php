<?php
namespace app\core;
class controller {

    public function render($view,$params=[]){

return Application::$app->router->renderView($view,$params);
    }
}