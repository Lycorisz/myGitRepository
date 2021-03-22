<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use common\models\PaperSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\db\Query;
/* @var $searchModel common\models\PaperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>选择章节</li>
            </ol>

            <div class="paper">
            <?php
            $allChapters = (new Query())
                ->select(['ch_name','ch_id'])
                ->from('chapter')
                ->orderBy('ch_position')
                ->indexBy('ch_id')
                ->column();
            ?>


            <div class="list-group">
                <?php

                ?>
            </div>
            </div>
        </div>
    </div>
</div>
</div>