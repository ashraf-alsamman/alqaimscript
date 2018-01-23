<?php
/* @var $this ParentStudentController */
/* @var $model ParentStudent */

$this->breadcrumbs=array(
	'Parent Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ParentStudent', 'url'=>array('index')),
	array('label'=>'Create ParentStudent', 'url'=>array('create')),
	array('label'=>'Update ParentStudent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ParentStudent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParentStudent', 'url'=>array('admin')),
);
?>

<h1>View ParentStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_id',
		'student_id',
		'create_time',
		'adder_id',
		'relation_title',
	),
)); ?>
