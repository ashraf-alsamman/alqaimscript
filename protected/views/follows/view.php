<?php
$this->breadcrumbs=array(
	'Follows'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Follows', 'url'=>array('index')),
	array('label'=>'Create Follows', 'url'=>array('create')),
	array('label'=>'Update Follows', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Follows', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Follows', 'url'=>array('admin')),
);
?>

<h1>View Follows #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_id',
		'r_id',
		'model_cg',
		'date_cg',
	),
)); ?>
