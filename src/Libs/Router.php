<?php
use Controllers\Inicio;
use Bramus\Router\Router;


$router = new Router();

$router->put("/",function(){

    $data = json_decode(file_get_contents('php://input'),true);
    var_dump($data);
    new Inicio();
});






$router->set404(function(){
	echo json_encode([
        "message" => "404 Not Found"
    ]);
});

$router->run();