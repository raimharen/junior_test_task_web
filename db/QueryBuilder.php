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
            "SELECT i.*, dvd.size dvd_size, book.weight book_weight, f.width furniture_width, f.height furniture_height, f.depth furniture_depth FROM items i LEFT JOIN type_dvd dvd ON dvd.item_sku = i.sku LEFT JOIN type_book book ON book.item_sku = i.sku LEFT JOIN type_furniture f ON f.item_sku = i.sku"
        );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
