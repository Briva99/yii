<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Input Data Pasien';

?>
<div class="pasien-index">
    <div class="box-tools pull-right">
    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'notelp_pasien',
            'pasien_start_date',
            //'pasien_created_date',
            //'status_pasien',
            //'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
