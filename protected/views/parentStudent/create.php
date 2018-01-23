<?php
/* @var $this ParentStudentController */
/* @var $model ParentStudent */

$this->breadcrumbs=array(
	'Parent Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParentStudent', 'url'=>array('index')),
	array('label'=>'Manage ParentStudent', 'url'=>array('admin')),
);
?>

<h1>Create ParentStudent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>