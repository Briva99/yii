<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Obat */

$this->title = 'Create Obat';
// $this->params['breadcrumbs'][] = ['label' => 'Obat', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
