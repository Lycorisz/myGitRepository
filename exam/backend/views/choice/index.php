<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ChoiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '选择题管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choice-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加选择题', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'cho_id',
            'cho_info:ntext',
            'cho_op1:ntext',
            'cho_op2:ntext',
            'cho_op3:ntext',
            'cho_op4:ntext',
            'cho_answer',
           [
                    'attribute'=>'cho_chap',
                    'label'=>'章节',
                    'value'=>'chapter.ch_name',
            ],
            //'cho_profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
