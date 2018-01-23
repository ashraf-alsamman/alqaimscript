<?php
/* @var $this DefaultLessonPlannerController */
/* @var $model DefaultLessonPlanner */

$this->breadcrumbs=array(
	'Default Lesson Planners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DefaultLessonPlanner', 'url'=>array('index')),
	array('label'=>'Manage DefaultLessonPlanner', 'url'=>array('admin')),
);
?>

<h1>Create DefaultLessonPlanner</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>