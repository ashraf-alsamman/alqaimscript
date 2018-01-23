<?php
/* @var $this DefaultLessonPlannerController */
/* @var $model DefaultLessonPlanner */

$this->breadcrumbs=array(
	'Default Lesson Planners'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List DefaultLessonPlanner', 'url'=>array('index')),
	array('label'=>'Create DefaultLessonPlanner', 'url'=>array('create')),
	array('label'=>'Update DefaultLessonPlanner', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DefaultLessonPlanner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DefaultLessonPlanner', 'url'=>array('admin')),
);
?>

<h1>View DefaultLessonPlanner #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'create_date',
		'update_date',
		'adder_id',
		'subject_id',
	),
)); ?>
