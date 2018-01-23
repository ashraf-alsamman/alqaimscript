<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	array('label'=>'Manage Messages', 'url'=>array('admin')),
);
?>

<h1>send Message to </h1>
 
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
 