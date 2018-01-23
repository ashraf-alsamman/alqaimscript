<?php  include 'lang.php';  ?>
	<div class="row">
    <?php 
 
$data_not_in = ExAuthAction::model()->findAllBySql("
		select ex_auth_action. * from ex_auth_action  where  controller_id =$controller_id  
		AND   ex_auth_action.id   not IN (select action_id from ex_auth_rel where
  job_title_id  = $job_title_id)
		     ");
 
$data_not_in_2 = ExAuthAction::model()->findBySql("
		select ex_auth_action. * from ex_auth_action  where  controller_id =$controller_id  
		AND   ex_auth_action.id   not IN (select action_id from ex_auth_rel where
  job_title_id  = $job_title_id)
		     ");
 

//echo $class_id;echo $parent_id;echo $grade_id;
 
   if (count ($data_not_in) > 1)
 	{

 
 echo CHtml::dropdownList('ExAuthController','id',CHtml::listData($data_not_in, 'id', 'action_title' ),   
array(
'empty' => Yii::t($language,'Add All Pages'),
                          
'class'=>'ExAuthAction')  ) ;
 echo CHtml::ajaxLink("Add Authentication",  array('AddAuthRel'), array( 'type'=>'POST','data'=>array(
  'action_id'=>'js:$(this).prev(\'.ExAuthAction\').val()','job_title_id'=>$job_title_id,'controller_id'=>$controller_id ),
  'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
	'update'=>"#job_title_id_$job_title_id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green' ));  

    } // END IF
	   elseif (count ($data_not_in) == 1)
	   {
 echo CHtml::ajaxLink("ِAdd $data_not_in_2->action_title",  array('AddAuthRel'), array( 'type'=>'POST','data'=>array('job_title_id'=>$job_title_id,'controller_id '=>$controller_id
 ,'action_id'=>$data_not_in_2->id),
	'update'=>"#job_title_id_$job_title_id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() )); 
	   }

 	   else  
	   {echo "no auth";  }
 
    ?>
	
	</div><br>