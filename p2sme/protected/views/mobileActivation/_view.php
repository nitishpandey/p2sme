<?php
/* @var $this MobileActivationController */
/* @var $data TblMobileActivation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('expiry_time')); ?>:</b>
	<?php echo CHtml::encode($data->expiry_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_form_id')); ?>:</b>
	<?php echo CHtml::encode($data->service_form_id); ?>
	<br />


</div>