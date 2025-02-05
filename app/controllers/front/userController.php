<?php
namespace App\controllers\front;

use App\core\Controller;
use App\models\User;

class UserController extends Controller {
    protected $userModel;

    public function __construct() {
        parent::__construct();
        $this->userModel = new User();
    }

    public function loginPage(){
        $this->render('login');
    }

    public function signupPage(){
        $this->render('signup');
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            if (empty($name) || empty($email) || empty($password)) {
                $this->render('signup', ['error' => 'Tous les champs sont obligatoires.']);
                return;
            }

            $result = $this->userModel->signup($name, $email, $password);

            if ($result === true) {
                $this->render("login");
                exit;
            } else {
                $this->render('signup', ['error' => $result]);
            }
        } else {
            $this->render('signup');
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                $this->render('login', ['error' => 'Tous les champs sont obligatoires.']);
                return;
            }

            $result = $this->userModel->login($email, $password);

            if ($result) {
                header("Location: /");
                exit;
            } else {
                $this->render('login', ['error' => 'Email ou mot de passe incorrect.']);
            }
        } else {
            $this->render('login');
        }
    }

    public function logout() {
        session_start();  
        session_unset(); 
        session_destroy();  
        header('Location: /login');
        exit;
    }
}
