<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasien */

$this->title = 'ID Pasien : ' . $model->id_pasien;
// $this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

   <div class="box-header with-border">

       <div class="box-tools pull-right">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pasien], [
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
            'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'notelp_pasien',
            'pasien_start_date',
            'pasien_created_date',
            'status_pasien',
            'logo',
        ],
    ]) ?>

</div>
