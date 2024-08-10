<?php


namespace Controllers;

use Libs\Controller;



class Inicio extends Controller{

    public function __construct(){

        parent::__construct();

        $this->exists(['email','phone']);
        

        $this->response(["message"=>$this->data]);

    }

}