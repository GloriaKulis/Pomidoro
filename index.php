<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path,PHP_URL_PATH);



Routing::get('index','DefaultController');
Routing::get('timer','DefaultController');
Routing::get('toDoList','DefaultController');
Routing::get('statistics','DefaultController');
Routing::get('achivments','DefaultController');

Routing::run($path);
