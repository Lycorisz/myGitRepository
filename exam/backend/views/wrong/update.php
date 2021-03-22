<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Wrong */

$this->title = 'Update Wrong: ' . $model->wrong_id;
$this->params['breadcrumbs'][] = ['label' => 'Wrongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wrong_id, 'url' => ['view', 'id' => $model->wrong_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wrong-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
