<?php
$this->breadcrumbs=array(
	'Follows'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Follows', 'url'=>array('index')),
	array('label'=>'Create Follows', 'url'=>array('create')),
	array('label'=>'View Follows', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Follows', 'url'=>array('admin')),
);
?>

<h1>Update Follows <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>