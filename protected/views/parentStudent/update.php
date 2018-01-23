<?php
/* @var $this ParentStudentController */
/* @var $model ParentStudent */

$this->breadcrumbs=array(
	'Parent Students'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParentStudent', 'url'=>array('index')),
	array('label'=>'Create ParentStudent', 'url'=>array('create')),
	array('label'=>'View ParentStudent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ParentStudent', 'url'=>array('admin')),
);
?>

<h1>Update ParentStudent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>