<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fillblank */

$this->title = 'Update Fillblank: ' . $model->fb_id;
$this->params['breadcrumbs'][] = ['label' => 'Fillblanks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fb_id, 'url' => ['view', 'id' => $model->fb_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fillblank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
