<?php
/* @var $this JobTitleController */
/* @var $model JobTitle */

$this->breadcrumbs=array(
	'Job Titles'=>array('index'),
	'Create',
);


?>
<?php  include 'lang.php';  ?>
<h1><?php echo Yii::t($language,'Add JobTitle') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>