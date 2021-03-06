<?php
/* @var $this ChargesController */
/* @var $model Charges */
/* @var $form CActiveForm */
?>

<div class="contactForm">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'charges-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<table>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textField($model,'item',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'item'); ?></td></tr>
	</div>
	<tr>
	<div class="row">
		<td><?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'amount'); ?></td></tr>
	</div>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
