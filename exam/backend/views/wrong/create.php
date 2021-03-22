<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Wrong */

$this->title = 'Create Wrong';
$this->params['breadcrumbs'][] = ['label' => 'Wrongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrong-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
