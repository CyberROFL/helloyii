<?php

$this->pageTitle = Yii::app()->name . ' - Login';

?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array('id' => 'login-form')); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row checkbox">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::submitButton('Enter'); ?>
    </div>

<?php $this->endWidget(); ?>

<div class="row">
    <?php echo CHtml::link('Register', Yii::app()->createUrl('register')); ?>
</div>

</div>
