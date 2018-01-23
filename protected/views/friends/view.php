<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Friends', 'url'=>array('index')),
	array('label'=>'Create Friends', 'url'=>array('create')),
	array('label'=>'Update Friends', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Friends', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Friends', 'url'=>array('admin')),
);
?>

<h1>View Friends #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'from_cg',
		'to_cg',
		'date_cg',
		'status_cg',
	),
)); ?>
