<?php
$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);


?>

 <?php echo $model->title; ?>
<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Update Subject Data') ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>