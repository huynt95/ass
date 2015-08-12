<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\loaisanphamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loaisanphams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaisanpham-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loaisanpham', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'loaisanpham_id',
            'ten',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
