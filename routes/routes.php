<?php

//page with all items
$router->get('/', 'ItemController@list');
$router->get('home', 'ItemController@list');
$router->get("", 'ItemController@list');
$router->get('index', 'ItemController@list');

//page where add item
$router->get('new_item', 'ItemController@new');
//add new item
$router->post('add_item', 'ItemController@add');
