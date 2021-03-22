<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WrongSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '错题管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrong-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'wrong_id',
            'wrong_stuid',
            'wrong_info:ntext',
            'wrong_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
