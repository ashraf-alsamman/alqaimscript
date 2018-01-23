<?php  include 'lang.php';  ?>


<h1><?php echo Yii::t($language,'Create LessonPlanner') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>