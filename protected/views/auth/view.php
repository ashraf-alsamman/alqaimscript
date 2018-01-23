<?php
/* @var $this AuthController */
/* @var $model Auth */

$this->breadcrumbs=array(
	'Auths'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Auth', 'url'=>array('index')),
	array('label'=>'Create Auth', 'url'=>array('create')),
	array('label'=>'Update Auth', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Auth', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Auth', 'url'=>array('admin')),
);
?>

<h1>View Auth #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'create_time',
		'update_time',
		'adder_id',
	),
)); ?>
