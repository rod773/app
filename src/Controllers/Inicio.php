<?php


namespace Controllers;

use Libs\Controller;



class Inicio extends Controller{

    public function __construct(){

        

        $this->exists(['email','phone']);



        $this->exists(['email','phone'],$data);


        $this->response(["message"=>"hello world"]);

    }

}