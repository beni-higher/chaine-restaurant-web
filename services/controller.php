<?php

class Controller{

    function __construct(){

        $this->view = new View();
    }

    public function loadModel($name){

        $chemin = 'models/'.$name.'_model.php';

        if (file_exists($chemin)){
            require $chemin;

            $modelName = $name.'_Model';
            $this->model = new $modelName();
        }
    }

}