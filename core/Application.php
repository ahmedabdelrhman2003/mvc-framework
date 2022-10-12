<?php

namespace app\core;
use app\controllers\AuthController;
use app\controllers\SiteController;
use app\models\Database;

class Application {

    public Database $db;
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public function __construct($rootPath) {
        
        self::$ROOT_DIR = $rootPath;
        $this->db = new Database();
        $this->response = new Response();
        $this->request = new Request();
        $this->router = new Router($this->request,$this->response);
        self::$app = $this;
    }


    public function run() {
        // TODO
        echo $this->router->resolve();
    }

}


?>