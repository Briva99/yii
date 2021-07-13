<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasien */

$this->title = 'Create Pasien';
?>
<div class="pasien-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
