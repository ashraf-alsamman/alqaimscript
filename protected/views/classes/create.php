<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Create',
);
 
?>

<h1>Create Classes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>