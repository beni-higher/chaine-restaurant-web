<?php

class Setting{
    function __construct(){
        $url = isset($_GET["url"]) ? $_GET["url"] : null;
        $url = rtrim($url,"/");
        $url = explode("/",$url);

        if(empty($url[0])){
            require 'controllers/main.page.controller.php';
            $controller = new MainPageController();
            $controller->index();
            return false;
        }
    }

}