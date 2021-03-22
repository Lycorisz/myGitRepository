<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tf */

$this->title = $model->tf_id;
$this->params['breadcrumbs'][] = ['label' => '判断题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->tf_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->tf_id], [
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
            'tf_id',
            'tf_info:ntext',
            'tf_answer',
            [
                'label'=>'章节',
                'value'=>$model->chapter->ch_name,
            ]
        ],
    ]) ?>

</div>
