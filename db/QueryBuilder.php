<?php
/**
 * Place with query to db
 */
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
            "SELECT i.*, dvd.size dvd_size, book.weight book_weight, f.dimension furniture_dimension FROM items i LEFT JOIN type_dvd dvd ON dvd.item_sku = i.sku LEFT JOIN type_book book ON book.item_sku = i.sku LEFT JOIN type_furniture f ON f.item_sku = i.sku ORDER BY i.id DESC"
        );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    //insert new item
    public function insert_item($sku, $name, $price, $type, $specific)
    {
        //$whiteList = ['dvd', 'book', 'furniture'];
        
        $table = "type_" . $type;
        try {
            $stmt = $this->pdo->prepare("INSERT INTO items(sku, name, price, type) VALUES(?, ?, ?, ?)");
            $stmt->execute(array($sku, $name, $price, $type));
            try {
                $stmt = $this->pdo->prepare("INSERT INTO $table VALUES(:sku, :specific)");
                $stmt->execute(array(':sku' => $sku, ':specific' => $specific));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function delete_item($id)
    {
        /*try{
            $stmt = $this->pdo->prepare("");
        } catch (Exception $e) {
            die($e->getMessage());
        }*/
        
    }
}
