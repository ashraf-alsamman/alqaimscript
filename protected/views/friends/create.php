<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Friends', 'url'=>array('index')),
	array('label'=>'Manage Friends', 'url'=>array('admin')),
);
?>

<h1>Create Friends</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>