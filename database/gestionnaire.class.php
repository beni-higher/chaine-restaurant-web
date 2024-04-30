<?php
    class Gestionnaire extends Employe{

        public function __construct($id,$nom,$motDePasse)
        {
            parent::__construct(id,nom, motDePasse);
        }

    }