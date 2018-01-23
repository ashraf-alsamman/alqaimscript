<?php
/* @var $this StaffController */
/* @var $model Staff */

$this->breadcrumbs=array(
	'Staffs'=>array('index'),
	'Create',
);

?>
<?php  include 'lang.php';  ?>
<h1><?php echo Yii::t($language,'Add Staff Members') ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>