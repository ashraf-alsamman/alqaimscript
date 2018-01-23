<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Friends', 'url'=>array('index')),
	array('label'=>'Create Friends', 'url'=>array('create')),
	array('label'=>'View Friends', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Friends', 'url'=>array('admin')),
);
?>

<h1>Update Friends <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>