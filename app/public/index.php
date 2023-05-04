<?php
// always load composer autoload
use App\controller\HomeController;
use App\controller\MessageController;
use App\core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();

/* Routes */
$router->addRoute('/', [HomeController::class, 'index']);
$router->addRoute('/register', [HomeController::class, 'register']);
$router->addRoute('/send-message', [MessageController::class, 'sendMessage']);


// Dispatch the request
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$router->dispatch($requestUri, $requestMethod);