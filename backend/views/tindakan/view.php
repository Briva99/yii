<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tindakan */

$this->title ='Master Tindakan : ' . $model->id_tindakan;
// $this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
<div class="tindakan-view">
    <div class="box-header with-border">
            <div class="box-tools pull-right">
                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->id_tindakan], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id_tindakan], [
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
            'id_tindakan',
            'jenis_tindakan:ntext',
            'harga',
        ],
    ]) ?>

</div>
