<?php
$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	'Create',
);


?>
 
<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Add Subjects') ?></h1>
<?php 


echo $this->renderPartial('_form', array('model'=>$model)); ?>