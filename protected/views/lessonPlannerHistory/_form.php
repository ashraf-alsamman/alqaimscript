<?php
/* @var $this LessonPlannerHistoryController */
/* @var $model LessonPlannerHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-planner-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'adder_id'); ?>
		<?php echo $form->textField($model,'adder_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adder_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_id'); ?>
		<?php echo $form->textField($model,'week_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'week_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lesson_planner_id'); ?>
		<?php echo $form->textField($model,'lesson_planner_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lesson_planner_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->