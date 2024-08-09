<?php
use Controllers\Inicio;
use Bramus\Router\Router;


$router = new Router();


$router->get("/",function(){

  echo  json_encode([
    "message" => "hola Mundo"
  ]);
});



$router->put("/",function(){

   new Inicio();
    
});



$router->set404(function(){
	echo json_encode([
        "message" => "404 Not Found"
    ]);
});

$router->run();