<?php
/* @var $this LessonPlannerLessonController */
/* @var $model LessonPlannerLesson */

$this->breadcrumbs=array(
	'Lesson Planner Lessons'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LessonPlannerLesson', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerLesson', 'url'=>array('create')),
	array('label'=>'View LessonPlannerLesson', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LessonPlannerLesson', 'url'=>array('admin')),
);
?>

<h1>Update LessonPlannerLesson <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>