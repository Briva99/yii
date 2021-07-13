<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasien */

$this->title = 'Update Pasien: ' . $model->id_pasien;

?>
<div class="pasien-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
