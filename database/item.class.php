<?php
class Item{
    private $id;
    private $nameItem;

    /**
     * @param $id
     * @param $nameItem
     * @param $priceItem
     */
    public function __construct($id, $nameItem, $priceItem)
    {
        $this->id = $id;
        $this->nameItem = $nameItem;
        $this->priceItem = $priceItem;
    }

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
    public function getNameItem()
    {
        return $this->nameItem;
    }

    /**
     * @param mixed $nameItem
     */
    public function setNameItem($nameItem): void
    {
        $this->nameItem = $nameItem;
    }

    /**
     * @return mixed
     */
    public function getPriceItem()
    {
        return $this->priceItem;
    }

    /**
     * @param mixed $priceItem
     */
    public function setPriceItem($priceItem): void
    {
        $this->priceItem = $priceItem;
    }
    private $priceItem;
}