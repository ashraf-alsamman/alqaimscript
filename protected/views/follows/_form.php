<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'follows-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'r_id'); ?>
		<?php echo $form->textField($model,'r_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'r_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model_cg'); ?>
		<?php echo $form->textField($model,'model_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'model_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_cg'); ?>
		<?php echo $form->textField($model,'date_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'date_cg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->