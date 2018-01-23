<?php
$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lessons', 'url'=>array('index')),
	array('label'=>'Manage Lessons', 'url'=>array('admin')),
);
?>

<h1>Create Lessons</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>