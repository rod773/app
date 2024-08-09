<?php

namespace  Libs;

class Controller{

    public $data;

   
    public function response(array $data, int $code=200){

         http_response_code($code);

         echo json_encode($data);

         exit;

    }

    public function exists(array $parameters){

        $this->data = json_decode(file_get_contents('php://input'),true);

        $missing = array_diff($parameters,array_keys($this->data));

        if(!empty($missing)){

            $string = implode(",", $missing);

            $this->response([
                "message" => "missing parameters : $string"
            ]);
        }

        return true;

    }

    public function isEmpty(){
        
    }

}