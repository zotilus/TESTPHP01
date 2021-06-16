<?php

header("Access-Control-Allow-Origin: *");

class Camera {

    public bool $isOnOff = true;

    public function takeAPicture(){

        if(!$this->isOnOff){
            http_response_code (  500);
        }

        echo 'clic-clac c kodak';
    }

}

$camera = new Camera();
$camera->takeAPicture();
