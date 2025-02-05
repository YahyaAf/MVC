<?php
use App\core\Router;
use App\controllers\front\articleController;


$router = new Router();

$router->get('/', articleController::class, 'home');

$router->get('/article', articleController::class, 'article');


$router->get('/login', userController::class, 'login');
$router->post('/signup', userController::class, 'signup');
$router->post('/logout', userController::class, 'logout');

$router->dispatch();