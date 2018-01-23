<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Update TimeLine') ?> <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>