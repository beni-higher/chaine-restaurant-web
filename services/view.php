<?php

class View{
    function __construct(){

    }

    public function render($name, $noinclude = false){

        if($noinclude == true){

            require 'views/'.$name.'view.php';

        }else{
            require 'views/header.php';

            require 'views/'.$name.'.view.php';

            require 'views/footer.php';
        }
    }
}