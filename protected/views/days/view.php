<?php
$this->breadcrumbs=array(
	'Days'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Days', 'url'=>array('index')),
	array('label'=>'Create Days', 'url'=>array('create')),
	array('label'=>'Update Days', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Days', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>View Days #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
	),
)); ?>
