<?php
//FRONT CONTROLLER


// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

require_once(ROOT.'/components/Autoload.php');

// 3. Установка соеденения с БД



// 4. Вызов Router 
         //Создаем екземпляр класса Router 
$router = new Router();
         //Вызываем метод run передав ему управление 
$router->run();