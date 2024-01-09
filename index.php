<?php

require_once(__DIR__ . "/vendor/autoload.php");
require_once(__DIR__ . "/App/Router.php");
require_once(__DIR__ . "/App/Core/Controller.php");
require_once(__DIR__ . "/App/Config/config.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();
// $dotenv->required([
//     'API_KEY',
// ]);

$router = new Router();
$router->run();
