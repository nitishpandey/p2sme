<?php
/* @var $this MobileActivationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Mobile Activations',
);

$this->menu=array(
	array('label'=>'Create TblMobileActivation', 'url'=>array('create')),
	array('label'=>'Manage TblMobileActivation', 'url'=>array('admin')),
);
?>

<h1>Tbl Mobile Activations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
