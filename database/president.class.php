<?php
class President extends Employe{

    public function __construct($id,$nom,$motDePasse)
    {
        parent::__construct(id,nom, motDePasse);
    }

}