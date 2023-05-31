<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/** @var yii\web\View $this */
/** @var app\models\Anggota $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="anggota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama_anggota')->textInput(['maxlength' => true]) ?>

    <?php // = $form->field($model, 'id_jabatan')->textInput() ?>

    <?php
        $dataPost=ArrayHelper::map(\app\models\Jabatan::find()
            ->asArray()->all(), 'id_jabatan', 'nama_jabatan');
    echo $form->field($model, 'id_jabatan')
        ->dropDownList(
            $dataPost,           
            ['id_jabatan'=>'nama_jabatan']
        );
    ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
