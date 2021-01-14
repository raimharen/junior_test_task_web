<?php

require 'vendor/autoload.php';

App::bind('config', require 'config/config.php');

App::bind('database', new QueryBuilder(Connection::initDB(App::get('config')['database'])));
