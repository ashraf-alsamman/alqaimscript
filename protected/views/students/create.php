<?php
/* @var $this StudentsController */
/* @var $model Students */
/*
$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);

   */   
 
?>


<?php  include 'lang.php';  ?>

<h1> <?php echo Yii::t($language,'Add Students') ?></h1>

<?php 


 
echo $this->renderPartial('_form', array('model'=>$model)); 
 
?>