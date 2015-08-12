<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\chitiethoadon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chitiethoadon_id')->textInput() ?>

    <?= $form->field($model, 'sanpham_id')->textInput() ?>

    <?= $form->field($model, 'hoadon_id')->textInput() ?>

    <?= $form->field($model, 'soluongmua')->textInput() ?>

    <?= $form->field($model, 'khuyenmai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'baohanh')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
