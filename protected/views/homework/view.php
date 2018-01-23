<?php
/* @var $this HomeworkController */
/* @var $model Homework */

$this->breadcrumbs=array(
	'Homeworks'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Homework', 'url'=>array('index')),
	array('label'=>'Create Homework', 'url'=>array('create')),
	array('label'=>'Update Homework', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Homework', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Homework', 'url'=>array('admin')),
);
?>

<h1>View Homework #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'update_time',
		'create_time',
		'author_id',
		'class_id',
		'grad_id',
		'subject_id',
	),
)); ?>
