<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //get all items
    public function items()
    {
        $stmt = $this->pdo->prepare(
            "SELECT i.*, dvd.size dvd_size, book.weight book_weight, f.dimension furniture_dimension FROM items i LEFT JOIN type_dvd dvd ON dvd.item_sku = i.sku LEFT JOIN type_book book ON book.item_sku = i.sku LEFT JOIN type_furniture f ON f.item_sku = i.sku"
        );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    //insert new item
    public function insert_item($sku, $name, $price, $type, $specific)
    {
        $sql_item = ("INSERT INTO items(sku, name, price, type) 
        VALUES ({$sku}, '{$name}', {$price}, '{$type}')");

        $sql_type = ("INSERT INTO type_{$type} VALUES ({$sku}, '{$specific}')");
        try {
            $stmt = $this->pdo->prepare($sql_item);
            $stmt->execute();
            try {
                $stmt = $this->pdo->prepare($sql_type);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
