<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */

$this->breadcrumbs=array(
	'Lesson Planner Weeks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LessonPlannerWeeks', 'url'=>array('index')),
	array('label'=>'Manage LessonPlannerWeeks', 'url'=>array('admin')),
);
?>

<h1>Create LessonPlannerWeeks</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>