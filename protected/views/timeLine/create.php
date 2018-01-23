<?php
/* @var $this TimeLineController */
/* @var $model TimeLine */

$this->breadcrumbs=array(
	'Time Lines'=>array('index'),
	'Create',
);

echo  Yii::app()->user->id ;
?>

<h1>Create TimeLine</h1>

<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>