<?php
/* @var $this PhotoController */
/* @var $model Photo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_cg'); ?>
		<?php echo $form->textField($model,'type_cg',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'r_id'); ?>
		<?php echo $form->textField($model,'r_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'r_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'info_cg'); ?>
		<?php echo $form->textArea($model,'info_cg',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'info_cg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploader_id'); ?>
		<?php echo $form->textField($model,'uploader_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'uploader_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'controller_title_ex'); ?>
		<?php echo $form->textField($model,'controller_title_ex',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'controller_title_ex'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->