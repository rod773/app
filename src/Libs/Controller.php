<?php

namespace  Libs;

class Controller{

    public function response(array $data, int $code=200){

        http_response_code($code);

        echo json_encode($data);

        exit;

    }


    public function exists(array $data, array $parameters){


        $missing = array_diff($parameters,array_keys($data));

        if(!empmty($missing)){
            
        }


    }

}