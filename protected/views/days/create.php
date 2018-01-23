<?php
$this->breadcrumbs=array(
	'Days'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Days', 'url'=>array('index')),
	array('label'=>'Manage Days', 'url'=>array('admin')),
);
?>

<h1>Create Days</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>