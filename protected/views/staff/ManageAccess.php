	<?php  include 'lang.php';  ?>
	<?php
	$user_access =  User::model()->findByAttributes(array('user_id'=>$teacher_id)) ;
	$data =  Staff::model()->findByAttributes(array('id'=>$teacher_id)) ;    
	
	if ($user_access)
	{
 ?><div class="da-message success"> <?php echo Yii::t($language,'Access Active') ?></div> <?php
 	if ($data->active !=1)
	{
     ?><div class="da-message info"> <?php echo Yii::t($language,'Access Inactive') ?></div> <?php
	}

?>
       
	<?php 
  ?> <div style="padding: 14px 4px 7px 9px; float: left"><?php
  echo CHtml::ajaxLink(Yii::t($language,'Delete Username'),  array('DeleteAccess'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id),
	'update'=>"#ManageAccess",	  'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	,'class'=>"da-tooltip-se da-button red",'confirm'=>Yii::t($language,'are you sure you want active')."$data->name")); 
  ?></div><?php
   
    ?> <div style="padding: 14px 4px 7px 9px; float: left;"><?php
  if (Staff::model()->findByAttributes(array('id'=>$teacher_id))->active == 1  ) 
        
  
  {

   	echo CHtml::ajaxLink(Yii::t($language,'Deactivate Access'),  array('FreezeAccess'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id),
	'update'=>"#ManageAccess",	 
		 'beforeSend' => 'function(){ Loading.show();}'
      ,'complete' => 'function(){ Loading.hide();}'
     
	 ,'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	
,'confirm'=>Yii::t($language,'are you sure you want deactivate')."$data->name"
	,'class'=>"da-tooltip-ne da-button blue"));
 
 
 

 
  }
  else{ echo CHtml::ajaxLink(Yii::t($language,'Active Access'),  array('UnFreezeAccess'), array( 'type'=>'POST','data'=>array('teacher_id'=>$teacher_id),
	'update'=>"#ManageAccess",
'beforeSend' => 'function(){ Loading.show();}'
,'complete' => 'function(){ Loading.hide();}',
 'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	 ,'confirm'=> Yii::t($language,'are you sure you want activate')." $data->name"
	,'class'=>"da-tooltip-ne da-button green")); 
 
  }
 
 
 ?></div><?php
 
 
 
  ?> <div style="padding: 14px 4px 7px 9px;float: left;"><?php
?><span class="da-tooltip-sw da-button gray" style="color:#888888"><?php
   echo CHtml::link(CHtml::encode(Yii::t($language,'Manage Account')), array('messages/create/', 'id'=>$teacher_id));                                   
?></span><?php
	?></div><?php
	  
	}
else
{
?> <div class="da-message warning"><?php echo Yii::t($language,'No username to access') ?> </div><?php	
	
Yii::app()->session['user_id']= $teacher_id ;	

?> <div style="padding: 14px 4px 7px 9px;float: left;"><?php
?><span class="da-tooltip-sw da-button green" style="color:#888888"><?php
echo CHtml::link(CHtml::encode(Yii::t($language,'Create Access')), array('user/admin/create/', 'user_id'=>$teacher_id),array("style"=>"color:#ffffff;")); 
?></span><?php
	?></div><?php


}