<?php

use Bramus\Router\Router;


$router = new Router();

$router->get("/",function(){
    echo json_encode([
        "message" => "Hola Mundo"
    ]);
});

$router->get("/users",function(){
    echo json_encode([
        "message" => "Lista Usuarios"
    ]);
});

// Custom 404 Handler
$router->set404(function(){
	echo json_encode([
        "message" => "404 Not Found"
    ]);
});

$router->run();