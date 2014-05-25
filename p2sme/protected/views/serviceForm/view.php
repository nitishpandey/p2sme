<?php
/* @var $this ServiceFormController */
/* @var $model TblServiceForm */
/*
$this->breadcrumbs=array(
	'Tbl Service Forms'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblServiceForm', 'url'=>array('index')),
	array('label'=>'Create TblServiceForm', 'url'=>array('create')),
	array('label'=>'Update TblServiceForm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblServiceForm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblServiceForm', 'url'=>array('admin')),
);
 */
?>

<h1><?php if(strcmp($s, 'activated') == 0) echo 'Activated ';?>Service Request #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'service_type',
		'quantity',
		'mobile_number',
		'email',
		'status',
	),
)); ?>
