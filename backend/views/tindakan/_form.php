<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;

/* @var $this yii\web\View */
/* @var $model backend\models\Tindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tindakan')->textInput() ?>

    <?= $form->field($model, 'jenis_tindakan')->textarea(['rows' => 1]) ?>

   
    <?=
        $form->field($model, 'harga')->widget(MaskMoney::classname(), [
            'pluginOptions' => [
                'prefix' => 'Rp ',
                'allowNegative' => false
            ]
        ]);
    ?>

    <div class="box-tools pull-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
         <?= Html::a(Yii::t('app', 'Back to List'), ['index'], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
