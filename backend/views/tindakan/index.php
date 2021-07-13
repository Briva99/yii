<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TindakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Data Tindakan';

?>
<div class="tindakan-index">
    <div class="box-tools pull-right">
        <p>
            <?= Html::a('Create Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tindakan',
            'jenis_tindakan:ntext',
            'harga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
