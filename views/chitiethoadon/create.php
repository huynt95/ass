<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\chitiethoadon */

$this->title = 'Create Chitiethoadon';
$this->params['breadcrumbs'][] = ['label' => 'Chitiethoadons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chitiethoadon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
