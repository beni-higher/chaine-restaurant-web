<?php
class Menu{
    private $idMenu;
    private $listItem;

    private $restaurant;

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
     * @return mixed
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * @param mixed $restaurant
     */
    public function setRestaurant($restaurant): void
    {
        $this->restaurant = $restaurant;
    }

    /**
     * @return mixed
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * @param mixed $listItem
     */
    public function setListItem($listItem): void
    {
        $this->listItem = $listItem;
    }

    /**
     * @param $idMenu
     * @param $listItem
     */
    public function __construct($idMenu, $listItem, $restaurant)
    {
        $this->idMenu = $idMenu;
        $this->listItem = $listItem;
        $this->restaurant = $restaurant;
    }
}