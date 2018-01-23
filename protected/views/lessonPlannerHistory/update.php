<?php
/* @var $this LessonPlannerHistoryController */
/* @var $model LessonPlannerHistory */

$this->breadcrumbs=array(
	'Lesson Planner Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LessonPlannerHistory', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerHistory', 'url'=>array('create')),
	array('label'=>'View LessonPlannerHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LessonPlannerHistory', 'url'=>array('admin')),
);
?>

<h1>Update LessonPlannerHistory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>