<?php

class ItemController
{
    public function list()
    {
        $items = App::get('database')->items();

        require 'app/views/item/allitems.php';
    }

    public function new_item()
    {
        require 'app/views/item/additem.php';
    }

    public function add_item()
    {
        $newItem = new Item(App::get('database'), $_POST);
        header('Location: /');
    }
}
