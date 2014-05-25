<?php
/* @var $this MobileActivationController */
/* @var $model TblMobileActivation */
?>

<h1>Please Validate:</h1>

<div class="form">
    <?php echo CHtml::beginForm(); ?>
    <?php echo CHtml::errorSummary($model); ?>
    <div class="row">
        <?php echo CHtml::label("Enter Verification Code", "code"); ?>
        <?php echo CHtml::textField("code"); ?>
    </div>
    <div class="row submit">
        <?php echo CHtml::submitButton('Validate'); ?>
    </div>
    <?php echo CHtml::endForm(); ?>
</div><!-- form -->