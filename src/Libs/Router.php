<?php

use Bramus\Router\Router;


$router = new Router();

$router->get("/",function(){
    echo json_encode([
        "message" => "Hola Mundo"
    ]);
});


$router->run();