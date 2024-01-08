<?php

require_once(__DIR__ . "/vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();
// $dotenv->required([
//     'API_KEY',
// ]);

$router = new Router();
$router->run();
