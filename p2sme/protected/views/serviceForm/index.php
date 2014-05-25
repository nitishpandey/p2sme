<?php
/* @var $this ServiceFormController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Service Forms',
);

$this->menu=array(
	array('label'=>'Create TblServiceForm', 'url'=>array('create')),
	array('label'=>'Manage TblServiceForm', 'url'=>array('admin')),
);
?>

<h1>Tbl Service Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
