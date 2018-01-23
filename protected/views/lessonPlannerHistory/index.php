<?php
/* @var $this LessonPlannerHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lesson Planner Histories',
);

$this->menu=array(
	array('label'=>'Create LessonPlannerHistory', 'url'=>array('create')),
	array('label'=>'Manage LessonPlannerHistory', 'url'=>array('admin')),
);
?>

<h1>Lesson Planner Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
