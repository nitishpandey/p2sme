<?php
/* @var $this ServiceFormController */
/* @var $model TblServiceForm */

$this->breadcrumbs=array(
	'Tbl Service Forms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblServiceForm', 'url'=>array('index')),
	array('label'=>'Create TblServiceForm', 'url'=>array('create')),
	array('label'=>'View TblServiceForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblServiceForm', 'url'=>array('admin')),
);
?>

<h1>Update TblServiceForm <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>