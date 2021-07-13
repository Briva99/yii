<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tindakan */

$this->title = 'Update Tindakan: ' . $model->id_tindakan;

?>
<div class="tindakan-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
