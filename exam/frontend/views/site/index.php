<?php

/* @var $this yii\web\View */
/* @var $searchModel common\models\ChapterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'My Yii Application';

use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Query; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>选择章节</li>
            </ol>

            <?=

                \yii\widgets\ListView::widget([
                        'id'=>'paperList',
                        'dataProvider'=>$dataProvider,
                        'itemView'=>'_listitem'
                ])
            ?>
        </div>
    </div>
</div>

