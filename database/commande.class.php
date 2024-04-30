<?php

class Commande{
    private $idCommande;
    private $typeCommande;

    /**
     * @return mixed
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * @param mixed $idCommande
     */
    public function setIdCommande($idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return mixed
     */
    public function getTypeCommande()
    {
        return $this->typeCommande;
    }

    /**
     * @param mixed $typeCommande
     */
    public function setTypeCommande($typeCommande): void
    {
        $this->typeCommande = $typeCommande;
    }

    /**
     * @param $idCommande
     * @param $typeCommande
     */
    public function __construct($idCommande, $typeCommande)
    {
        $this->idCommande = $idCommande;
        $this->typeCommande = $typeCommande;
    }

public function modifierCommande($idCommande):void{

}
}