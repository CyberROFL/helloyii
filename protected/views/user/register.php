<?php

$this->pageTitle = Yii::app()->name . ' - Register';

?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array('id' => 'User_')); ?>

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

    <div class="row">
        <?php echo $form->labelEx($model, 'password2'); ?>
        <?php echo $form->passwordField($model, 'password2'); ?>
        <?php echo $form->error($model, 'password2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'company'); ?>
        <?php echo $form->textField($model, 'company'); ?>
        <?php echo $form->error($model, 'company'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::submitButton('Register'); ?>
    </div>

<?php $this->endWidget(); ?>

</div>

<script>
    $(document).ready(function() {
        $('#User_company').autocomplete({
            serviceUrl: 'get_companies/',
            minChars: 2,
            delimiter: /(,|;)\s*/, // regex or character
            maxHeight: 400,
            width: 310,
            zIndex: 9999,
            deferRequestBy: 300, //miliseconds
            type: 'POST',
            params: {}, //aditional parameters
            noCache: true, //default is false, set to true to disable caching
            // callback function:
            onSelect: function(value, data){}
        });
    });

    $('#User_').submit(function () {
        $('#User_').find('.errorMessage').remove();

        if (!validateEmail($('#User_email').val())) {
            $('#User_email').parent().append('<div class="errorMessage">Email is not a valid email address.</div>');
            return false;
        }
        if (!validatePassword($('#User_password').val())) {
            $('#User_password').parent().append('<div class="errorMessage">Password cannot be blank.</div>');
            return false;
        }
        if (!validatePassword($('#User_password').val(), $('#User_password2').val())) {
            $('#User_password2').parent().append('<div class="errorMessage">Repeat password must be repeated exactly.</div>');
            return false;
        }
        if (!validatePassword($('#User_company').val())) {
            $('#User_company').parent().append('<div class="errorMessage">Company cannot be blank.</div>');
            return false;
        }
    });
</script>
