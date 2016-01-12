<?php
/**
 * Created by PhpStorm.
 * User: sydorenkovd
 */

/** @var $tag common\models\Tags */
/** @var $posts yii\db\ActiveQuery */
/** @var $categories yii\data\ActiveDataProvider */

use yii\helpers\Html;

$this->title = $tag->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-sm-8 post-index">

    <h1>Тэг: <?= Html::encode($this->title) ?></h1>

    <?php
    foreach ($posts->all() as $postTag) {
        echo $this->render('//post/shortView', [
            'model' => $postTag->getPost()->one()
        ]);
    }
    ?>

</div>