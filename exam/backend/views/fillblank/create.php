<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fillblank */

$this->title = '添加填空题';
$this->params['breadcrumbs'][] = ['label' => '填空题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fillblank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
