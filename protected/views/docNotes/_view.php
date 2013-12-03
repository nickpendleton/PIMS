<?php
/* @var $this DocNotesController */
/* @var $data DocNotes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('noteID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->noteID), array('view', 'id'=>$data->noteID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patientID')); ?>:</b>
	<?php echo CHtml::encode($data->patientID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitID')); ?>:</b>
	<?php echo CHtml::encode($data->visitID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('doctorID')); ?>:</b>
	<?php echo CHtml::encode($data->doctorID); ?>
	<br />


</div>