<?php


namespace Controllers;

use Libs\Controller;



class Inicio extends Controller{

    public function __construct(){

        
        $this->exists(['email','phone']);

        $this->response(["message"=>"hello world"]);

    }

}