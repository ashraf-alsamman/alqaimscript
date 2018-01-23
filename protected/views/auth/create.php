<?php
/* @var $this AuthController */
/* @var $model Auth */

$this->breadcrumbs=array(
	'Auths'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Auth', 'url'=>array('index')),
	array('label'=>'Manage Auth', 'url'=>array('admin')),
);
?>

<h1>Create Auth</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>