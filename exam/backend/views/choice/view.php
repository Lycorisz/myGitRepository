<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Choice */

$this->title = $model->cho_id;
$this->params['breadcrumbs'][] = ['label' => '选择题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="choice-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->cho_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->cho_id], [
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
            'cho_id',
            'cho_info:ntext',
            'cho_op1:ntext',
            'cho_op2:ntext',
            'cho_op3:ntext',
            'cho_op4:ntext',
            'cho_answer',
            [
                    'label'=>'章节',
                    'value'=>$model->chapter->ch_name,
            ]
            //'cho_profile',
        ],
    ]) ?>

</div>
