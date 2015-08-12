<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\hoadonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hoadons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoadon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hoadon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hoadon_id',
            'khachhang_id',
            'ngaymua',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
