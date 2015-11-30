<?php
class NewsController{

    public function actionAll(){

        $item = News::getAll();
        $view = new View();
        $view->assign('item', $item);
        $view->display('all.php');
//        include __DIR__ . '/../views/all.php';
}
    public function actionOne(){
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/one.php';
    }
}
