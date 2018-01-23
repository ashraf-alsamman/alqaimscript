<?php
/* @var $this LessonPlannerLessonController */
/* @var $model LessonPlannerLesson */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-planner-lesson-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adder_id'); ?>
		<?php echo $form->textField($model,'adder_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'adder_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lesson_planner_week_id'); ?>
		<?php echo $form->textField($model,'lesson_planner_week_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lesson_planner_week_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lesson_planner_id'); ?>
		<?php echo $form->textField($model,'lesson_planner_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lesson_planner_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lesson_date'); ?>
		<?php echo $form->textField($model,'lesson_date',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lesson_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upload_ex'); ?>
		<?php echo $form->textArea($model,'upload_ex',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'upload_ex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->