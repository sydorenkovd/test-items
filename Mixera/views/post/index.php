<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $posts yii\data\ActiveDataProvider */
/* @var $categories yii\data\ActiveDataProvider */
/* @var $post common\models\Post */
?>

<div class="col-sm-8 post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    foreach ($posts->models as $post) {
        echo $this->render('shortView', [
            'model' => $post
        ]);
    }
    ?>

</div>