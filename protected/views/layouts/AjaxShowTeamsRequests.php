<?php
$to_cg_new = Yii::app()->user->id ;
 $Mysqls =  Teams::model()->findAllBySql("select teams. * from tbl_users, challenger_team, teams 
 where tbl_users.id=challenger_team.challenger_id 
 AND  teams.id  = challenger_team.team_id
 AND challenger_team.challenger_id  = $to_cg_new
 AND  team_id   IN (select team_id from challenger_team where  challenger_id != $to_cg_new  )
 
 ") ;       
 
 if ($Mysqls)
 {
	
    foreach ($Mysqls as $Mysql)
	{

	    $new_Mysqls =  ChallengerTeam::model()->findAllBySql("select * from challenger_team where team_id =  $Mysql->id and challenger_id != $to_cg_new  AND challenger_team.status_cg  = 'request' AND challenger_team.asker  = 'user'") ;
		$team_title =  Teams::model()->findByPk($Mysql->id)->title;
	
		if (count($new_Mysqls)>0)
		 {	
			foreach ($new_Mysqls as $new_Mysql )
			{ 
			?><div id="req_res_Teams<?php echo $new_Mysql->id?>"><?php 
			echo user::model()->findByPk($new_Mysql->challenger_id)->username;echo " Ask to join to ";echo  Teams::model()->findByPk($new_Mysql->team_id)->title;
			echo CHtml::ajaxLink("Confirm",  array('ConfirmMember'), array('type'=>'POST','data'=>array('id_T'=>"$new_Mysql->id",),'update'=>"#req_res_Teams$new_Mysql->id", 'live' =>'false' )  ,array('id' =>uniqid() ) ); 
			echo "&nbsp;|&nbsp;";
			echo CHtml::ajaxLink("Not Now ",  array('NotNowMember'), array('type'=>'POST','data'=>array('id_T'=>"$new_Mysql->id",),'update'=>"#req_res_Teams$new_Mysql->id",  'live' =>'false') ,array('id' => uniqid(),'confirm'=>'Are you sure' )); 
			echo"<br>";
            ?></div><?php 
			}
		 }
	
     }
 }
	  else { echo "No new Teams requests";echo "<br>"; }	
	  //////////////////////////////////////////////////////////////////

?><hr><div  style="color:#545c21;background:#cadff8; float:left; margin: 0px 1px 0px 8px;"><?php 
$ChallengerTeam = ChallengerTeam::model()->findAllByAttributes(array('challenger_id'=> Yii::app()->user->id,'asker'=>'admin','status_cg'=>'request' )) ;
	  		if ($ChallengerTeam)
		 {	
			foreach ($ChallengerTeam as $new_Mysql )
			{ 
			?><div id="req_res_Teams<?php echo $new_Mysql->id?>"><?php 
			echo user::model()->findByPk($new_Mysql->challenger_id)->username;echo " Ask you to join to";echo  Teams::model()->findByPk($new_Mysql->team_id)->title;
			echo CHtml::ajaxLink("Confirm",  array('ConfirmMember'), array('type'=>'POST','data'=>array('id_T'=>"$new_Mysql->id",),'update'=>"#req_res_Teams$new_Mysql->id", 'live' =>'false' )  ,array('id' =>uniqid() ) ); 
			echo "&nbsp;|&nbsp;";
			echo CHtml::ajaxLink("Not Now ",  array('NotNowMember'), array('type'=>'POST','data'=>array('id_T'=>"$new_Mysql->id",),'update'=>"#req_res_Teams$new_Mysql->id",  'live' =>'false') ,array('id' => uniqid(),'confirm'=>'Are you sure' )); 
			echo"<br>";
            ?></div><?php 
			}
		 }

	?>
</div>
		
  