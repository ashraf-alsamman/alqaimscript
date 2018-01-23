<?php
/* @var $this ParentsController */
/* @var $model Parents */

$this->breadcrumbs=array(
	'Parents'=>array('index'),
	'Create',
);


?>
<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Add Parents') ?></h1>
 

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>