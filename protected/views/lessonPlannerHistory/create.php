<?php
/* @var $this LessonPlannerHistoryController */
/* @var $model LessonPlannerHistory */

$this->breadcrumbs=array(
	'Lesson Planner Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LessonPlannerHistory', 'url'=>array('index')),
	array('label'=>'Manage LessonPlannerHistory', 'url'=>array('admin')),
);
?>

<h1>Create LessonPlannerHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>