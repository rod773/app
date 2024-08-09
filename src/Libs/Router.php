<?php

use Bramus\Router\Router;


$router = new Router();

$router->get("/",function(){
    $inicio = new Inicio();
});






$router->set404(function(){
	echo json_encode([
        "message" => "404 Not Found"
    ]);
});

$router->run();