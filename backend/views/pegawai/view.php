<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = 'View Data Karyawan ';
// $this->params['breadcrumbs'][] = ['label' => 'Karyawan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

         <div class="box-header with-border">

                   <div class="box-tools pull-right">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->nip], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->nip], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Apakah Anda Yakin Mau Menghapus Data ini?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                            <?= Html::a(Yii::t('app', 'Back to List'), ['index'], ['class' => 'btn btn-warning']) ?>
                        </p>
                    </div>
        </div>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'nip',
            'nama:ntext',
            'alamat:ntext',
            'tempat:ntext',
            'tgl_lahir',
            'jenis_kelamin',
            'status_perkawinan',
            'status_pegawai',
            // 'jabatan',
            'jabatanbaru.kode_jabatan',
            'jabatanbaru.jabatan',
            'telepon',
            'email:email',
        ],
    ]) ?>

</div>
