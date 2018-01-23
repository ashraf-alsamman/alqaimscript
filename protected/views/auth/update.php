<?php
/* @var $this AuthController */
/* @var $model Auth */

$this->breadcrumbs=array(
	'Auths'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Auth', 'url'=>array('index')),
	array('label'=>'Create Auth', 'url'=>array('create')),
	array('label'=>'View Auth', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Auth', 'url'=>array('admin')),
);
?>

<h1>Update Auth <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>