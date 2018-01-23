<?php
/* @var $this DefaultLessonPlannerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Default Lesson Planners',
);

$this->menu=array(
	array('label'=>'Create DefaultLessonPlanner', 'url'=>array('create')),
	array('label'=>'Manage DefaultLessonPlanner', 'url'=>array('admin')),
);
?>

<h1>Default Lesson Planners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
