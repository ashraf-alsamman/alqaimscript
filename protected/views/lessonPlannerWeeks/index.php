<?php
/* @var $this LessonPlannerWeeksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lesson Planner Weeks',
);

$this->menu=array(
	array('label'=>'Create LessonPlannerWeeks', 'url'=>array('create')),
	array('label'=>'Manage LessonPlannerWeeks', 'url'=>array('admin')),
);
?>

<h1>Lesson Planner Weeks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
