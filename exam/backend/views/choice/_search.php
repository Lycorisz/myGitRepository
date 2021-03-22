<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChoiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="choice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cho_id') ?>

    <?= $form->field($model, 'cho_info') ?>

    <?= $form->field($model, 'cho_op1') ?>

    <?= $form->field($model, 'cho_op2') ?>

    <?= $form->field($model, 'cho_op3') ?>

    <?php // echo $form->field($model, 'cho_op4') ?>

    <?php // echo $form->field($model, 'cho_answer') ?>

    <?php // echo $form->field($model, 'cho_chap') ?>

    <?php // echo $form->field($model, 'cho_profile') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
