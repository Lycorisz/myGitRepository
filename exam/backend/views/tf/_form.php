<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Query;
/* @var $this yii\web\View */
/* @var $model common\models\Tf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tf_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tf_answer')->textInput(['maxlength' => true]) ?>

    <?php
    $allchapters = (new Query())
        ->select(['ch_name','ch_id'])
        ->from('chapter')
        ->orderBy('ch_position')
        ->indexBy('ch_id')
        ->column();
    ?>
    <?= $form->field($model, 'tf_chapter')->dropDownList($allchapters,['prompt'=>'请选择章节']) ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
