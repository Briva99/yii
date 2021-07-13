<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Obat */

$this->title = 'Daftar Obat : ' . $model->id_obat;
// $this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="obat-view">
    <div class="box-header with-border">

       <div class="box-tools pull-right">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id_obat], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id_obat], [
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
            'id_obat',
            'nama_obat',
            'harga_obat',
        ],
    ]) ?>

</div>
