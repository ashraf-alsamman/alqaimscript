<?php
/* @var $this HomeworkController */
/* @var $model Homework */

$this->breadcrumbs=array(
	'Homeworks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Homework', 'url'=>array('index')),
	array('label'=>'Manage Homework', 'url'=>array('admin')),
);
?>

<h1>Create Homework</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>