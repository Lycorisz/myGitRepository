<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Choice */

$this->title = '修改题目： ' . $model->cho_id;
$this->params['breadcrumbs'][] = ['label' => '选择题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cho_id, 'url' => ['view', 'id' => $model->cho_id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="choice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
