<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\chitiethoadonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chitiethoadon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'chitiethoadon_id') ?>

    <?= $form->field($model, 'sanpham_id') ?>

    <?= $form->field($model, 'hoadon_id') ?>

    <?= $form->field($model, 'soluongmua') ?>

    <?= $form->field($model, 'khuyenmai') ?>

    <?php // echo $form->field($model, 'baohanh') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
