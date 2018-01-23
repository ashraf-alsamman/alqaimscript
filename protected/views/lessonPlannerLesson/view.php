<?php
/* @var $this LessonPlannerLessonController */
/* @var $model LessonPlannerLesson */

$this->breadcrumbs=array(
	'Lesson Planner Lessons'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LessonPlannerLesson', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerLesson', 'url'=>array('create')),
	array('label'=>'Update LessonPlannerLesson', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LessonPlannerLesson', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LessonPlannerLesson', 'url'=>array('admin')),
);
?>

<h1>View LessonPlannerLesson #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'adder_id',
		'create_date',
		'update_date',
		'lesson_planner_week_id',
		'lesson_planner_id',
		'subject_id',
		'lesson_date',
		'upload_ex',
		'note',
	),
)); ?>
