<?php
/* @var $this JobTitleController */
/* @var $model JobTitle */

$this->breadcrumbs=array(
	'Job Titles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1>Update JobTitle <?php echo $model->title; ?></h1>

<?php
if ($model->id == 1 ||$model->id == 2 ||$model->id == 3 ||$model->id == 4 )
{ Yii::app()->request->redirect('../');}




 echo $this->renderPartial('_form', array('model'=>$model)); ?>















