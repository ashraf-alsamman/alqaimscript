<?php
/* @var $this HomeworkController */
/* @var $model Homework */

$this->breadcrumbs=array(
	'Homeworks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Homework', 'url'=>array('index')),
	array('label'=>'Create Homework', 'url'=>array('create')),
	array('label'=>'View Homework', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Homework', 'url'=>array('admin')),
);
?>

<h1>Update Homework <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>