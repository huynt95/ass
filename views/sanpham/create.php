<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\sanpham */

$this->title = 'Create Sanpham';
$this->params['breadcrumbs'][] = ['label' => 'Sanphams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sanpham-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
