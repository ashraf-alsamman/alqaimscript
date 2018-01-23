<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */

$this->breadcrumbs=array(
	'Lesson Planner Weeks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LessonPlannerWeeks', 'url'=>array('index')),
	array('label'=>'Create LessonPlannerWeeks', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lesson-planner-weeks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lesson Planner Weeks</h1>

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
	'id'=>'lesson-planner-weeks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'adder_id',
		'create_date',
		'update_date',
		'from_date_ex',
		/*
		'to_date_ex',
		'lesson_planner_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
