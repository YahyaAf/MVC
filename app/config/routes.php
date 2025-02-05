<?php
use App\core\Router;
use App\controllers\front\articleController;
use App\controllers\front\userController;


$router = new Router();

$router->get('/', articleController::class, 'home');

$router->get('/article', articleController::class, 'article');


$router->get('/login', userController::class, 'loginPage');
$router->get('/signup', userController::class, 'signupPage');


$router->post('/login', userController::class, 'login');
$router->post('/signup', userController::class, 'signup');
$router->post('/logout', userController::class, 'logout');

$router->dispatch();