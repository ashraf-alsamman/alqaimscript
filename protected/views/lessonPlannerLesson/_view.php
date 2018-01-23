<?php
/* @var $this LessonPlannerLessonController */
/* @var $data LessonPlannerLesson */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adder_id')); ?>:</b>
	<?php echo CHtml::encode($data->adder_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesson_planner_week_id')); ?>:</b>
	<?php echo CHtml::encode($data->lesson_planner_week_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesson_planner_id')); ?>:</b>
	<?php echo CHtml::encode($data->lesson_planner_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesson_date')); ?>:</b>
	<?php echo CHtml::encode($data->lesson_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upload_ex')); ?>:</b>
	<?php echo CHtml::encode($data->upload_ex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>

</div>