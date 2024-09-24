<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Signup';
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="site-signup">
    <p>Please fill out the following fields to signup:</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'role')->dropDownList(['admin' => 'Admin', 'manager' => 'Manager', 'user' => 'User']) ?>

    <div class="form-group">
        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
