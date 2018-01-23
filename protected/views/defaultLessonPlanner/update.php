<?php
/* @var $this DefaultLessonPlannerController */
/* @var $model DefaultLessonPlanner */

$this->breadcrumbs=array(
	'Default Lesson Planners'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DefaultLessonPlanner', 'url'=>array('index')),
	array('label'=>'Create DefaultLessonPlanner', 'url'=>array('create')),
	array('label'=>'View DefaultLessonPlanner', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DefaultLessonPlanner', 'url'=>array('admin')),
);
?>

<h1>Update DefaultLessonPlanner <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>