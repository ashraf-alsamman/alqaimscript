<?php
$this->breadcrumbs=array(
	'Time Tables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TimeTable', 'url'=>array('index')),
	array('label'=>'Create TimeTable', 'url'=>array('create')),
	array('label'=>'Update TimeTable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TimeTable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TimeTable', 'url'=>array('admin')),
);
?>

<h1>View TimeTable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'day_id',
		'class_id',
		'subject_id',
		'teacher_id',
		'lesson_id',
	),
)); ?>
