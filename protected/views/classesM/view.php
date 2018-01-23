<?php
$this->breadcrumbs=array(
	'Classes Ms'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ClassesM', 'url'=>array('index')),
	array('label'=>'Create ClassesM', 'url'=>array('create')),
	array('label'=>'Update ClassesM', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClassesM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClassesM', 'url'=>array('admin')),
);
?>

<h1>View ClassesM #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'grade',
	),
)); ?>
