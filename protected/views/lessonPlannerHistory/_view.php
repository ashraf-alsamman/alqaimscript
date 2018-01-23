<?php
/* @var $this LessonPlannerHistoryController */
/* @var $data LessonPlannerHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adder_id')); ?>:</b>
	<?php echo CHtml::encode($data->adder_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('week_id')); ?>:</b>
	<?php echo CHtml::encode($data->week_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lesson_planner_id')); ?>:</b>
	<?php echo CHtml::encode($data->lesson_planner_id); ?>
	<br />


</div>