<?php
class Item
{

    protected $sku;
    protected $name;
    protected $price;
    protected $type;
    protected $size;


    function __construct()
    {
        /*
        $db, $params
        $this->sku = $params['sku'];
        $this->name = $params['name'];
        $this->price = $params['price'];
        $this->type = $params['type'];
        $this->specific = $params['specific'];

        $db->insert_item($params['sku'], $params['name'], $params['price'], $params['type'], $params['specific']);*/
    }

    public static function addItem($db, $params){
        $db->insert_item($params['sku'], $params['name'], $params['price'], $params['type'], $params['specific']);
    }

    public static function deleteItem($db, $params){
        var_dump($params['id']);
        $db->delete_item($params['id']);

    }
}

/*
class DVD extends Item
{
    function __construct($sku, $name, $price, $size)
    {
        $this->size = $size;
        $this->type = "dvd";
    }
}

class Book extends Item
{
    function __construct($sku, $name, $price, $weight)
    {
        $this->weight = $weight;
        $this->type = "book";
    }
}


class Furniture extends Item
{
    function __construct($sku, $name, $price, $dimensions)
    {
        $this->dimensions = $dimensions;
        $this->type = "furniture";
    }
}*/
