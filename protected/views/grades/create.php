<?php
$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Create',
);


?>

<h1>Create Grades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>