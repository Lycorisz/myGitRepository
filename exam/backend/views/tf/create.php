<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Tf */

$this->title = 'Create Tf';
$this->params['breadcrumbs'][] = ['label' => 'Tfs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
