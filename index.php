<?php
// FRONT CONTROLLER



// 1. Загальні налаштування
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// 2. Підключення файлів сиситеми
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');


// 3. З'єднання з БД


// 4. Виклик Router
$router = new Router();
$router->run();