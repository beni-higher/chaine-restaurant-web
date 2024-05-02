<?php


class Config
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        if (empty($url[0]) || $url[0] == "main-page") {
            require 'controllers/main.page.controller.php';
            $controller = new MainPageController();
            $controller->index();
            return false;
        }

        $file = 'controllers/' . $url[0] . '.controller.php';

        //verification de l'existence de la page courrante

        if (file_exists($file)) {
            require $file;
        } else {
            require 'controllers/erreur.controller.php';
            $app = new ErreurController();
            $app->index();
            return false;
        }


        if ($url[0]=="menu"){
            $controller = new MenuController();
        }elseif ($url[0]=="commande"){
            $controller = new CommandeController();
        }elseif ($url[0]=="panier") {
            $controller = new PanierController();
        }elseif ($url[0]=="login"){
            $controller = new LoginController();
        }

        $controller->loadModel($url[0]);

        //verification de l'existence de methode ou fonction courrante
        if (isset($url[2])) {

            if (method_exists($controller, $url[1])) {

                $controller->{$url[1]}($url[2]);

            } else {
                $this->erreur();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {

                    $controller->{$url[1]}();
                } else {
                    $this->erreur();
                }
            } else {
                $controller->index();
            }
        }


    }

    function erreur()
    {
        require 'controllers/erreur.controller.php';
        $controller = new ErreurController();
        $controller->index();
        return false;
    }

}
