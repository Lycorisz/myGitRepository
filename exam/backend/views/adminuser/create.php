<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Adminuser */

$this->title = '新增管理员';
$this->params['breadcrumbs'][] = ['label' => '管理员管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admin_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_password_repeat')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admin_email')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
