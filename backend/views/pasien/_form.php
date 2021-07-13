<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notelp_pasien')->textInput() ?>
    <?=
        $form->field($model, 'pasien_start_date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukkan Tanggal Lahir'],
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'yyyy-m-dd'
            ]
        ]);
    ?>

    <?= $form->field($model, 'status_pasien')->dropDownList([ 'umum' => 'Umum', 'BPJS' => 'BPJS','Asuransi Lain'=>'Asuransi Lain' ], ['prompt' => 'Asuransi/Umum']) ?>

    <!-- <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?> -->

    <div class="box-tools pull-right">
      <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
     <?= Html::a(Yii::t('app', 'Back to List'), ['index'], ['class' => 'btn btn-warning']) ?>
 </div>
    <!-- </div> -->

    <?php ActiveForm::end(); ?>

</div>
