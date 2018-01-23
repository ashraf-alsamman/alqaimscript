 <?php  include 'lang.php';  ?>
    <?php 

		 $data = ExAuthController::model()->findAll();
	 echo CHtml::dropdownList('ExAuthController','id',CHtml::listData($data, 'id', 'title' ),   
array(
'empty' => Yii::t($language,'Select Category'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('AddAuth'), 'type' => 'POST','update'=>"#Auth_$job_title_id",                              
'data'=>array('controller_id'=>'js:$(this).val()','job_title_id'=>$job_title_id,)
,'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
 )),                          
)  ) ;
 
 
    ?>


                                          
<br>
 <div id ="Auth_<?php echo $job_title_id ;?>"></div> 
 