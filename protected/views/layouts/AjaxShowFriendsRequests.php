<?php
  $to_cg_new = Yii::app()->user->id ;
$Mysqls_count =   Friends::model()->findAllBySql("select * from friends where to_cg = $to_cg_new  AND read_cg = 'no'    AND status_cg = 'request'") ;   
 ?> <span  id ="ReadFriends" style="color:#ffffff;background:#e10347; float:left; margin: 0px 0px 0px 1px;">
 <?php  if (count($Mysqls_count)>0){echo count($Mysqls_count);} ?></span><?php

  $Mysqls =   Friends::model()->findAllBySql("select * from friends where to_cg = $to_cg_new  AND status_cg = 'request'  ") ;   
		if (count($Mysqls)>0)
		{
foreach ($Mysqls as $Mysql)
	{

		$username=  User::model()->findByPk($Mysql->from_cg)->username ;
			?><div id="req_res<?php echo $Mysql->id?>"><?php 
	echo $username ;
	echo CHtml::ajaxLink("Confirm",  array('AjaxNFriends'), array('type'=>'POST','data'=>array('id_F'=>"$Mysql->id",),'update'=>"#req_res$Mysql->id", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'confirm'=>'Are you sure' )); 
	echo "&nbsp;|&nbsp;";
	echo CHtml::ajaxLink("Not Now",  array('AjaxNotNowFriends'), array('type'=>'POST','data'=>array('id_F'=>"$Mysql->id",),'update'=>"#req_res$Mysql->id", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'confirm'=>'Are you sure' )); 

	echo 	'<br></div>';
		}
		
	}
		else{echo 'you dont have new Friends requests ';}	  ?>	

		  </div><!-- req_res --><?php
