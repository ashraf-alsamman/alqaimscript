<?php
$this->breadcrumbs=array(
	'Days'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Days', 'url'=>array('index')),
	array('label'=>'Create Days', 'url'=>array('create')),
	array('label'=>'View Days', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>Update Days <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>