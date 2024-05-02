<?php

/**
 * @property View $view
 */
class Controller{

    function __construct(){

        $this->view = new View();
    }

    public function loadModel($name){

        $chemin = 'models/'.$name.'.model.php';

        if (file_exists($chemin)){
            require $chemin;

            if ($chemin=="menu"){
                $this->model = new MenuModel();
            }elseif ($chemin=="commande"){
                $this->model = new CommandeModel();
            }elseif ($chemin=="restaurant") {
                $this->model = new RestaurantModel();
            }elseif ($chemin=="login"){
                $this->model = new LoginModel();
            }

        }
    }

}