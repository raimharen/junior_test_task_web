<?php

//page with all items
$router->get('/', 'ItemController@list');
$router->get('home', 'ItemController@list');
$router->get("", 'ItemController@list');
$router->get('index', 'ItemController@list');

//page where add item
$router->get('new_item', 'ItemController@new_item');
//add new item
$router->post('add_item', 'ItemController@add_item');
//delete item 
$router->post('mass_delete', 'ItemController@delete_item');
