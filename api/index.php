<?php

use App\RouterManager;
use App\api;
ini_set("max_execution_time",0);
require_once dirname(__DIR__)."/api/vendor/autoload.php";
$httpMethod= $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$route = new RouterManager;
$route->dispatch($httpMethod, $uri, api::getDispatcher());

echo "gola";