<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ObatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Data Obat';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <div class="box-tools pull-right">
        <p>
            <?= Html::a('Create Obat', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_obat',
            'nama_obat',
            'harga_obat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
