<?php
$this->breadcrumbs=array(
	'Classes Ms'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClassesM', 'url'=>array('index')),
	array('label'=>'Create ClassesM', 'url'=>array('create')),
	array('label'=>'View ClassesM', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClassesM', 'url'=>array('admin')),
);
?>

<h1>Update ClassesM <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>