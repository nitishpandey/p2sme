<?php
/* @var $this MobileActivationController */
/* @var $model TblMobileActivation */

$this->breadcrumbs=array(
	'Tbl Mobile Activations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblMobileActivation', 'url'=>array('index')),
	array('label'=>'Create TblMobileActivation', 'url'=>array('create')),
	array('label'=>'View TblMobileActivation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblMobileActivation', 'url'=>array('admin')),
);
?>

<h1>Update TblMobileActivation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>