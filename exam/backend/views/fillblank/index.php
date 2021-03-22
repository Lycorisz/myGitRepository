<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FillblankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '填空题管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fillblank-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加填空题', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [


            'fb_id',
            'fb_info:ntext',
            'fb_answer:ntext',
            [
                'attribute'=>'fb_chapter',
                'label'=>'章节',
                'value'=>'chapter.ch_name',
            ],
            //'fb_profile',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
