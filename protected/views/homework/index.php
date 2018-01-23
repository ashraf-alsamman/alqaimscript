<?php
/* @var $this HomeworkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Homeworks',
);

$this->menu=array(
	array('label'=>'Create Homework', 'url'=>array('create')),
	array('label'=>'Manage Homework', 'url'=>array('admin')),
);
?>

<h1>Homeworks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
