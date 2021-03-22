<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Query;
/* @var $this yii\web\View */
/* @var $model common\models\Choice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choice-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cho_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cho_op1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cho_op2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cho_op3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cho_op4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cho_answer')->textInput(['maxlength' => true]) ?>

    <?php
    $allchapters = (new Query())
                    ->select(['ch_name','ch_id'])
                    ->from('chapter')
                    ->orderBy('ch_position')
                    ->indexBy('ch_id')
                    ->column();
    ?>
    <?= $form->field($model, 'cho_chap')->dropDownList($allchapters,['prompt'=>'请选择章节']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
