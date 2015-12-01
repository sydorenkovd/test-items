<?php
namespace app\controllers;

use app\models\News;
use app\classes\View;
class NewsController{

    public function actionAll(){

        $items = News::getAll();
        $view = new View();
        $view->items = $items;
        $view->display('all.php');
}
    public function actionOne(){
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        $view->display('one.php');
    }

    public function actionInsert()
    {
        $view = new View();
        $view->display('insert.php');
        $article = new News();
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->insert();
    }

    public function actionUpdate()
    {
        $view = new View();
        $view->display('update.php');
        $article = new News();
        $article->title = $_POST['title'];
        $article->text = $_POST['text'];
        $article->update();
    }

    public function actionFindByColumn()
    {
        $item = News::findByColumn('title', 'Hello');
        $view = new View();
        $view->item = $item;
        $view->display('findByColumn.php');
    }
}
