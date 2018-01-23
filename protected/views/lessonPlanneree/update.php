<?php
/* @var $this LessonPlannerController */
/* @var $model LessonPlanner */

$this->breadcrumbs=array(
	'Lesson Planners'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);


?>

<h1>Update LessonPlanner <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>