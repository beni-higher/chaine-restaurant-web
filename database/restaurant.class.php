<?php

class Restaurant{
    private $id;
    private $nameRestaurant;
    private $idMenu;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameRestaurant()
    {
        return $this->nameRestaurant;
    }

    /**
     * @param mixed $nameRestaurant
     */
    public function setNameRestaurant($nameRestaurant): void
    {
        $this->nameRestaurant = $nameRestaurant;
    }

    /**
     * @return mixed
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }

    /**
     * @param mixed $idMenu
     */
    public function setIdMenu($idMenu): void
    {
        $this->idMenu = $idMenu;
    }

    /**
     * @param $id
     * @param $nameRestaurant
     * @param $idMenu
     */
    public function __construct($id, $nameRestaurant, $idMenu)
    {
        $this->id = $id;
        $this->nameRestaurant = $nameRestaurant;
        $this->idMenu = $idMenu;
    }
}