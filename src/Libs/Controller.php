<?php

namespace  Libs;

class Controller{

    public function response(array $data, int $code=200){

         http_response_code($code);

         echo json_encode($data);

         exit;

    }

    public function exists(array $data, array $parameters){

        $missings = array_diff($parameters,array_keys($data));

        if(!empty($missing)){

            $string = implode(",",$missing);

            $this->response([
                "message" => "missing parameters : $string"
            ]);
        }

    }

}