<?php

class ItemController
{
    
    /**
     * Index page. Page with all products
     */
    public function list()
    {
        $items = App::get('database')->items();

        require 'app/views/item/allitems.php';
    }

    /**
     * Page where add new product
     */
    public function new_item()
    {
        require 'app/views/item/additem.php';
    }

    /**
     * Add new product to db
     */
    public function add_item()
    {
        $item = new Item();
        $newItem = $item->addItem(App::get('database'), $_POST);
        header('Location: /');
    }

    /**
     * Delete products
     */
    public function delete_item()
    {
        $item = new Item();
        $deleteList = $item->deleteItem(App::get('database'), $_POST["product"]);
        header('Location: /'); 
    }
}
