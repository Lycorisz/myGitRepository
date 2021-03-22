<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WrongSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wrong-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wrong_id') ?>

    <?= $form->field($model, 'wrong_stuid') ?>

    <?= $form->field($model, 'wrong_info') ?>

    <?= $form->field($model, 'wrong_status') ?>

    <?= $form->field($model, 'wrong_cretime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
