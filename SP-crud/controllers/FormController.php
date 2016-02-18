<?php
namespace app\controllers;

use app\models\News;
use app\classes\View;

class FormController
{
    public function actionIndex()
    {
        if (!($_POST['name'] && $_POST['email'])) {
            echo "<h1>" . 'Must enter name' . "</h1>";
        }
        $view = new View();
        $view->display('form.php');
    }
}