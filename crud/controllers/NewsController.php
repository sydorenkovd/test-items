<?php
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
        $article = new News();
        $article->title = 'Hello';
        $article->text = 'Hello, World';
        $article->insert();
    }
}
