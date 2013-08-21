<?php

$this->pageTitle = Yii::app()->name . ' - Login';

?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array('id' => 'LoginForm_')); ?>

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

<script>
    $('#LoginForm_').submit(function () {
        $('#LoginForm_').find('.errorMessage').remove();

        if (!validateEmail($('#LoginForm_email').val())) {
            $('#LoginForm_email').parent().append('<div class="errorMessage">Email is not a valid email address.</div>');
            return false;
        }
        if (!validatePassword($('#LoginForm_password').val())) {
            $('#LoginForm_password').parent().append('<div class="errorMessage">Password cannot be blank.</div>');
            return false;
        }

        return true;
    });
</script>
