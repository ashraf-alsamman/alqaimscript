<?php
/* @var $this LessonPlannerLessonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lesson Planner Lessons',
);

$this->menu=array(
	array('label'=>'Create LessonPlannerLesson', 'url'=>array('create')),
	array('label'=>'Manage LessonPlannerLesson', 'url'=>array('admin')),
);
?>

<h1>Lesson Planner Lessons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
