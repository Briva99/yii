<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Data Karyawan';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

<div class="box-tools pull-right">
    <p>
        <?= Html::a('Create Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_pegawai',
            'nip',
            'nama:ntext',
            'alamat:ntext',
            // 'agama',
            //'jenis_kelamin',
            //'status_perkawinan',
            //'status_pegawai',
            // 'jabatan',
            'jabatanbaru.kode_jabatan',
            'jabatanbaru.jabatan',
            //'telepon',
            //'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
