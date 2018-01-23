<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'countries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'iso'); ?>
		<?php echo $form->textField($model,'iso',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'iso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printable_name'); ?>
		<?php echo $form->textField($model,'printable_name',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'printable_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iso3'); ?>
		<?php echo $form->textField($model,'iso3',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'iso3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numcode'); ?>
		<?php echo $form->textField($model,'numcode'); ?>
		<?php echo $form->error($model,'numcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lon'); ?>
		<?php echo $form->textArea($model,'lon',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textArea($model,'lat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zoom'); ?>
		<?php echo $form->textField($model,'zoom',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zoom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printable_name_ar'); ?>
		<?php echo $form->textField($model,'printable_name_ar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'printable_name_ar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->