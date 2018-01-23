<?php
    $Users =  Users::model()->findByPk(Yii::app()->user->id) ;
 if ($Users)
 {
 	Yii::app()->setLanguage($Users->lang);
 }

?>