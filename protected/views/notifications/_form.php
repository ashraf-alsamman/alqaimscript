<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notifications-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'from_cg'); ?>
		<?php echo $form->textField($model,'from_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'from_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_cg'); ?>
		<?php echo $form->textField($model,'to_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'to_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_cg'); ?>
		<?php echo $form->textField($model,'date_cg'); ?>
		<?php echo $form->error($model,'date_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'read_cg'); ?>
		<?php echo $form->textField($model,'read_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'read_cg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->