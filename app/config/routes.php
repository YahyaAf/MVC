<?php
use App\core\Router;
use App\controllers\front\articleController;


$router = new Router();

$router->get('/', articleController::class, 'home');

$router->get('/article', articleController::class, 'article');

$router->dispatch();