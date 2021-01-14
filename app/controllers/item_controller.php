<?php

class ItemController
{
    public function list()
    {
        $items = App::get('database')->items();
      
        require 'app/views/allitems.php';
    }
}
