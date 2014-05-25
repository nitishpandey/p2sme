<?php
/* @var $this MobileActivationController */
/* @var $model TblMobileActivation */

$this->breadcrumbs=array(
	'Tbl Mobile Activations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblMobileActivation', 'url'=>array('index')),
	array('label'=>'Create TblMobileActivation', 'url'=>array('create')),
	array('label'=>'Update TblMobileActivation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblMobileActivation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblMobileActivation', 'url'=>array('admin')),
);
?>

<h1>View TblMobileActivation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'expiry_time',
		'service_form_id',
	),
)); ?>
