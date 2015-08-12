<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\chitiethoadon */

$this->title = 'Update Chitiethoadon: ' . ' ' . $model->chitiethoadon_id;
$this->params['breadcrumbs'][] = ['label' => 'Chitiethoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->chitiethoadon_id, 'url' => ['view', 'id' => $model->chitiethoadon_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chitiethoadon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
