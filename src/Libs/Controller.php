<?php

namespace  Libs;

class Controller{

    public $data;

    public function __construct(){
        $this->data = json_decode(file_get_contents('php://input'),true);
    }

   
    public function response(array $data, int $code=200){

         http_response_code($code);

         echo json_encode($data);

         exit;

    }

    public function exists(array $parameters){

        

        $missing = array_diff($parameters,array_keys($this->data));

        if(!empty($missing)){

            $string = implode(",", $missing);

            $this->response([
                "message" => "missing parameters : $string"
            ]);
        }

        $this->isEmpty();

        return true;

    }

    public function isEmpty(){

        $data = $this->data;
        $aux = [];
       
        foreach($data as $key => $param){
            if(empty($data[$param])){
                $aux[] = $key;
            }
        }

        if(!empty($aux)){

            $string = implode(",", $aux);

            $this->response([
                "message" => "Parameters is empty : $string"
            ]);
        }

        return true;
    }

}