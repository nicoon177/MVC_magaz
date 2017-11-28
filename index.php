<?php

// FRONT CONTROLER

// 1. Загальні настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Підключення файлів системи
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

// 3. Підключення до БД


// 4. Виклик Router
$router = new Router();
$router->run();