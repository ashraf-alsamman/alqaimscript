<?php
$this->breadcrumbs=array(
	'Classes Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClassesM', 'url'=>array('index')),
	array('label'=>'Manage ClassesM', 'url'=>array('admin')),
);
?>

<h1>Create ClassesM</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>