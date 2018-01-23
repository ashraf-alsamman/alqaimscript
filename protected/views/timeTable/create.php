<?php
$this->breadcrumbs=array(
	'Time Tables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TimeTable', 'url'=>array('index')),
	array('label'=>'Manage TimeTable', 'url'=>array('admin')),
);
?>

<h1>Create TimeTable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>