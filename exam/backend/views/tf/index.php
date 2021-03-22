<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '判断题管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加判断题', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'tf_id',
            'tf_info:ntext',
            'tf_answer',
            [
                'attribute'=>'tf_chapter',
                'label'=>'章节',
                'value'=>'chapter.ch_name',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
