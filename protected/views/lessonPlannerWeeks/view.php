<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */

$this->breadcrumbs=array(
	'Lesson Planner Weeks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LessonPlannerWeeks', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerWeeks', 'url'=>array('create')),
	array('label'=>'Update LessonPlannerWeeks', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LessonPlannerWeeks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LessonPlannerWeeks', 'url'=>array('admin')),
);
?>

<h1>View LessonPlannerWeeks #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'adder_id',
		'create_date',
		'update_date',
		'from_date_ex',
		'to_date_ex',
		'lesson_planner_id',
	),
)); ?>
