<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Fillblank */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fillblank-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fb_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fb_answer')->textarea(['rows' => 6]) ?>


    <?php
        $allChapters = (new \yii\db\Query())
                    ->select(['ch_name','ch_id'])
                    ->from('chapter')
                    ->orderBy('ch_position')
                    ->indexBy('ch_id')
                    ->column();
    ?>
    <?= $form->field($model, 'fb_chapter')->dropDownList($allChapters,['prompt'=>'请选择章节']) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
