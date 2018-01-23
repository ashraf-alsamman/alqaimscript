<?php
/* @var $this ParentsController */
/* @var $model Parents */

$this->breadcrumbs=array(
	'Parents'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
 
?>
<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Update Parent Data') ?></h1>
 

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>