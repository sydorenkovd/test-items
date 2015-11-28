<?php
require_once __DIR__ . '/../models/News.php';
class NewsController{

    public function actionAll(){

        $item = News::getAll();
        include __DIR__ . '/../views/AllNews.php';
}
    public function actionOne(){
        $id = $_GET['id'];
        $item = News::getOne();
        include __DIR__ . '/../views/oneNews.php';
    }
}
