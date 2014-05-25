<?php
/* @var $this ServiceFormController */
/* @var $model TblServiceForm

$this->breadcrumbs=array(
	'Tbl Service Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblServiceForm', 'url'=>array('index')),
	array('label'=>'Manage TblServiceForm', 'url'=>array('admin')),
);
 * 
 */
?>

<h1>New Service Request Form:</h1>

<!--?php $this->renderPartial('_form', array('model'=>$model)); ?-->
<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 
    <div class="row">
        <?php echo CHtml::activeLabel($model,'name'); ?>
        <?php echo CHtml::activeTextField($model,'name') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'service_type'); ?>
        <?php echo CHtml::activeTextField($model,'service_type') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'quantity'); ?>
        <?php echo CHtml::activeTextField($model,'quantity') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'mobile_number'); ?>
        <?php echo CHtml::activeTextField($model,'mobile_number') ?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'email'); ?>
        <?php echo CHtml::activeTextField($model,'email') ?>
    </div>
 

    <div class="row submit">
        <?php echo CHtml::submitButton('Add Request'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
