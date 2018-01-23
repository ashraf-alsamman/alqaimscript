<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */

$this->breadcrumbs=array(
	'Lesson Planner Weeks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LessonPlannerWeeks', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerWeeks', 'url'=>array('create')),
	array('label'=>'View LessonPlannerWeeks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LessonPlannerWeeks', 'url'=>array('admin')),
);
?>

<h1>Update LessonPlannerWeeks <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>