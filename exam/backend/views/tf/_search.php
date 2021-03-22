<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tf-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tf_id') ?>

    <?= $form->field($model, 'tf_info') ?>

    <?= $form->field($model, 'tf_answer') ?>

    <?= $form->field($model, 'tf_chapter') ?>

    <?= $form->field($model, 'tf_cretime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
