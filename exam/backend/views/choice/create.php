<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Choice */

$this->title = 'Create Choice';
$this->params['breadcrumbs'][] = ['label' => '选择题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
