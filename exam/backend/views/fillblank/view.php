<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Fillblank */

$this->title = $model->fb_id;
$this->params['breadcrumbs'][] = ['label' => '填空题管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fillblank-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->fb_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->fb_id], [
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
            'fb_id',
            'fb_info:ntext',
            'fb_answer:ntext',
            [

                    'label'=>'章节',
                    'value'=>$model->chapter->ch_name,
            ],
            //'fb_profile',
        ],
    ]) ?>

</div>
