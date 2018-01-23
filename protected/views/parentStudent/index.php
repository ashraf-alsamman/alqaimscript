<?php
/* @var $this ParentStudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parent Students',
);

$this->menu=array(
	array('label'=>'Create ParentStudent', 'url'=>array('create')),
	array('label'=>'Manage ParentStudent', 'url'=>array('admin')),
);
?>

<h1>Parent Students</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
