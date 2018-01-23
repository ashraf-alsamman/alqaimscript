<?php
/* @var $this LessonPlannerLessonController */
/* @var $model LessonPlannerLesson */

$this->breadcrumbs=array(
	'Lesson Planner Lessons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LessonPlannerLesson', 'url'=>array('index')),
	array('label'=>'Manage LessonPlannerLesson', 'url'=>array('admin')),
);
?>

<h1>Create LessonPlannerLesson</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>