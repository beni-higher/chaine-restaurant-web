<?php

class CommandeController extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->view->render('commande');
    }

}