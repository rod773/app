<?php


namespace Controllers;

use Libs\Controller;



class Inicio extends Controller{

    public function __construct($data){

        var_dump($data);

        parent::__construct();

        $this->exists(['email','phone'],$data);

        $this->response(["message"=>"hello world"]);

    }

}