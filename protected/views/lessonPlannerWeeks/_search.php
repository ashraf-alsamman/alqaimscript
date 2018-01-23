<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adder_id'); ?>
		<?php echo $form->textField($model,'adder_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'from_date_ex'); ?>
		<?php echo $form->textField($model,'from_date_ex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'to_date_ex'); ?>
		<?php echo $form->textField($model,'to_date_ex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lesson_planner_id'); ?>
		<?php echo $form->textField($model,'lesson_planner_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->