<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = 'Create Karyawan';
// $this->params['breadcrumbs'][] = ['label' => 'Karyawan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
