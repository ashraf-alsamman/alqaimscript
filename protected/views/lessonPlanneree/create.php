<?php
/* @var $this LessonPlannerController */
/* @var $model LessonPlanner */

$this->breadcrumbs=array(
	'Lesson Planners'=>array('index'),
	'Create',
);
 
?>

<h1>Create LessonPlanner</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>