<?php
$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lessons', 'url'=>array('index')),
	array('label'=>'Create Lessons', 'url'=>array('create')),
	array('label'=>'View Lessons', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lessons', 'url'=>array('admin')),
);
?>

<h1>Update Lessons <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>