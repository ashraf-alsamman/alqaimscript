<?php
/* @var $this LessonPlannerLessonController */
/* @var $model LessonPlannerLesson */

$this->breadcrumbs=array(
	'Lesson Planner Lessons'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LessonPlannerLesson', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerLesson', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lesson-planner-lesson-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lesson Planner Lessons</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lesson-planner-lesson-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'adder_id',
		'create_date',
		'update_date',
		'lesson_planner_week_id',
		/*
		'lesson_planner_id',
		'subject_id',
		'lesson_date',
		'upload_ex',
		'note',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
