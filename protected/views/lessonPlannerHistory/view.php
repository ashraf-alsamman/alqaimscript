<?php
/* @var $this LessonPlannerHistoryController */
/* @var $model LessonPlannerHistory */

$this->breadcrumbs=array(
	'Lesson Planner Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LessonPlannerHistory', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerHistory', 'url'=>array('create')),
	array('label'=>'Update LessonPlannerHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LessonPlannerHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LessonPlannerHistory', 'url'=>array('admin')),
);
?>

<h1>View LessonPlannerHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'adder_id',
		'week_id',
		'lesson_planner_id',
	),
)); ?>
