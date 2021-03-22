<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Wrong */

$this->title = $model->wrong_id;
$this->params['breadcrumbs'][] = ['label' => '错题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wrong-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('删除', ['delete', 'id' => $model->wrong_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '你确定要删除这道题吗？',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'wrong_id',
            'wrong_stuid',
            'wrong_info:ntext',
            'wrong_status',
        ],
    ]) ?>

</div>
