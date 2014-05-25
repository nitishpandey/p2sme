<?php
/* @var $this MobileActivationController */
/* @var $model TblMobileActivation */

$this->breadcrumbs=array(
	'Tbl Mobile Activations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblMobileActivation', 'url'=>array('index')),
	array('label'=>'Manage TblMobileActivation', 'url'=>array('admin')),
);
?>

<h1>Create TblMobileActivation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>