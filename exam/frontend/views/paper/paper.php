<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\db\Query; ?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
            <li><a href="<?= Yii::$app->homeUrl;?>?r=site/index">选择章节</a></li>

            <?php
            $userid = Yii::$app->user->id;
            $name = (new Query())
                            ->select('ch_name')
                            ->from('chapter')
                            ->where('ch_id='.$id)
                            ->column();
            ?>
            <li><?= Html::encode($name[0]);?></li>
        </ol>
        <div class="col-md-12">
            <?=

            $this->render('_question',[
                    'id'=>$id,
                    'userid'=>$userid,
            ])?>
        </div>
    </div>
</div>
