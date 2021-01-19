<?php

class ItemController
{
    public function list()
    {
        $items = App::get('database')->items();

        require 'app/views/allitems.php';
    }

    public function new_item()
    {
        require 'app/views/additem.php';
    }

    public function add_item()
    {
        $newItem = new Item(App::get('database'), $_POST);
        header('Location: /');
    }
}
