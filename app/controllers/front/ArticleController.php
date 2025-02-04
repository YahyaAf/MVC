<?php
namespace App\controllers\front;

use App\core\Controller;
use App\models\article;

class ArticleController extends controller{
    protected $articles;
    public function __construct(){
        $this->articles= new article();
    }

    public function home(){
        $allArticles=$this->articles->getArticles();
        $this->render('home',['articles'=>$allArticles]);
    }

    public function article(){
        $article=$this->articles->getArticleById($_GET['id']);
        $this->render('article',['article'=>$article]);
    }
}