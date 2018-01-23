<?php

 Yii::app()->session['user_id'];
$this->breadcrumbs=array(
        UserModule::t('Users')=>array('admin'),
        UserModule::t('Create'),
);

 
?>
<h1><?php echo UserModule::t("Create User"); ?></h1>

<?php 
       $user_id = $_GET['user_id'];
        $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile,'user_id'=>$user_id));
?>

