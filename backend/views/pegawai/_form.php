<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tempat')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan Tanggal lahir'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd'
                ]
            ]); ?>

    <?= $form->field($model, 'agama')->dropDownList(['islam' => 'Islam','Kristen Protestan'=>'Kristen Protestan','Kristen Katolik'=>'Kristen Katolik','Hindu'=>'Hindu','Budha'=>'Budha','Konghucu'=>'Konghucu'],['prompt'=>'- Pilih Agama -']) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList(['Lelaki' => 'Lelaki','perempuan'=>'Perempuan'],['prompt'=>'- Pilih Jenis Kelamin -']) ?>

    <?= $form->field($model, 'status_perkawinan')->dropDownList(['menikah' => 'Menikah','belum menikah'=>'Belum Menikah','duda'=>'Duda','janda'=>'Janda'],['prompt'=>'- Status Perkawinan -']) ?>

    <?= $form->field($model, 'status_pegawai')->dropDownList(['kontrak' => 'Kontrak','pegawai tetap'=>'Pegawai Tetap'],['prompt'=>'- Pilih Status Pekerjaan -']) ?>

    <?php //= $form->field($model, 'jabatan')->dropDownList(['staf' => 'Staf','spv'=>'SPV','dokter'=>'Dokter Umum','Dokter Spesialis'=>'Dokter Spesialis'],['prompt'=>'Pilih Jabatan']) ?>

     <?php
        $dataPost=ArrayHelper::map(\backend\models\Jabatan::find()->asArray()->all(), 'id_jabatan', 'jabatan');
    echo $form->field($model, 'id_jabatan')
        ->dropDownList(

            $dataPost,
            ['prompt'=>'- Pilih Jabatan -'],           
            ['id_jabatan'=>'jabatan'],

        );

    ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="box-tools pull-right">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Back to List'), ['index'], ['class' => 'btn btn-warning']) ?>
    </div>
<br>
<br>


    <?php ActiveForm::end(); ?>

</div>
