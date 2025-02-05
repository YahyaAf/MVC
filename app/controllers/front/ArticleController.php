<?php
namespace App\controllers\front;

use App\core\Controller;
use App\models\Article;

class ArticleController extends Controller {
    protected $articles;

    public function __construct() {
        parent::__construct();
        $this->articles = new Article();
    }

    public function home() {
        $allArticles = $this->articles->getArticles();
        $this->render('home', ['articles' => $allArticles]);
    }

    public function article() {
        $article = $this->articles->getArticleById($_GET['id']);
        $this->render('article', ['article' => $article]);
    }  

    
}
