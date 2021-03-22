<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Wrong */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrong-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wrong_stuid')->textInput() ?>

    <?= $form->field($model, 'wrong_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'wrong_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wrong_cretime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
