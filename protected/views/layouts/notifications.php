<?php 
if (Yii::app()->user->id!=0)
 {

?>

 <div id="notification" style="clear:both">
  

<!-- Messages tart -->  
<div id= "Nmessages_c" style="color:#545c21;background:#e2ec9b;  float:left; margin: 0px 1px 0px 8px;">
  <?php  $to_cg_new = Yii::app()->user->id;
$Mysqls =  Messages::model()->findAllBySql("select * from messages where to_cg = $to_cg_new  AND read_cg = 'no' ") ; 
echo CHtml::ajaxLink("M",  array('Nmessages'), array( 'type'=>'POST' )); 
 ?> <span  id ="ReadMessages" style="color:#ffffff;background:#e10347;  float:right; margin: 0px 0px 0px 1px;"><?php  if (count($Mysqls)>0){echo count($Mysqls);} ?></span>     
 
 <script type="text/javascript">
 $(function() {
$("#Nmessages").hide("normal");
	     $("#Nmessages_c").click(function() {
         $("#ReadMessages").hide("slow");
         $("#Nmessages").show("normal");
     });

      });
</script>
</div><!-- Nmessages_c -->  
<div id= "Nmessages" style="color:#545c21;background:#e2ec9b; float:left; margin: 0px 1px 0px 8px;">
		<?php 
		$to_cg_new = Yii::app()->user->id;
		$Mysqls =  Messages::model()->findAllBySql("select * from messages where to_cg = $to_cg_new ") ; 
		
		if (count($Mysqls)>0)
		{
			foreach($Mysqls as $Mysql) 
			{

			$this->widget('ext.timeago.JTimeAgo', array( 'selector' => ' .timeago',));
$username = user::model()->findByPk($Mysql->from_cg);
		if ($username)	{echo 'from '. $username->username;echo "<br>";	}		
			echo CHtml::link('<abbr class="timeago" title=" '.$Mysql->date_cg .'" > </abbr>', array("messages/$Mysql->from_cg"));
			}
			
		}
		 else { echo "no new messages"; }
?>
</div><!-- Nmessages End --> 

<!-- Messages End --> 



<!-- Friends Start --> 
<div id= "NFriends_c" style="color:#545c21;background:#e2ec9b; float:left; margin: 0px 1px 0px 8px;"> 
 <?php 
//echo CHtml::ajaxLink("F",  array('ReadFriends'), array('type'=>'POST','data'=>array('to_cg'=>"$to_cg_new",  ),'update'=>"#ReadFriends",));  
	 echo CHtml::ajaxLink("Friend",  array('AjaxShowFriendsRequests'), array( 'type'=>'POST',
	  'update'=>"#AjaxShowFriendsRequests",'live'=>false ) ,array('id'=>uniqid()  )   ); // ajax link end 
 ?></div><!-- NFriends_c -->


<?php 
$to_cg_new = Yii::app()->user->id ;?>
  
 
<div id= "AjaxShowFriendsRequests" style="color:#545c21;background:#e2ec9b; float:left;">
<?php $Mysqls_count =   Friends::model()->findAllBySql("select * from friends where to_cg = $to_cg_new  AND read_cg = 'no'    AND status_cg = 'request'") ;   
 ?> <span  id ="ReadFriends" style="color:#ffffff;background:#e10347; float:left; margin: 0px 0px 0px 1px;">
 <?php  if (count($Mysqls_count)>0){echo count($Mysqls_count);} ?></span>
</div><!-- AjaxShowFriendsRequests -->


<!--  Friends End -->   
	




<!--  Enemies Start -->  	
  <div id= "NEnemies_c" style="color:#545c21;background:#e2ec9b;  float:left; margin: 0px 1px 0px 8px;">
<?php 	 echo CHtml::ajaxLink("Enemies",  array('AjaxShowEnemies'), array( 'type'=>'POST',
	  'update'=>"#AjaxShowEnemies",'live'=>false ) ,array('id'=>uniqid()  )   ); // ajax link end  ?> 
  </div><!-- NFriends_c -->
<div id= "AjaxShowEnemies"  style="color:#545c21;background:#e2ec9b; float:left;">
	<?php $Mysqls =   Enemies::model()->findAllBySql("select * from enemies where to_cg = $to_cg_new  AND read_cg = 'no' ") ; ?>		
	 <span  id ="ReadEnemies" style="color:#ffffff;background:#e10347;  float:right; margin: 0px 0px 0px 1px;"><?php  if (count($Mysqls)>0){echo count($Mysqls);} ?></span> 
</div> <!--  AjaxShowEnemies end -->

<!-- Enemies End -->  	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- Teams Start --> 
<div id= "NTeams_c" style="color:#545c21;background:#e2ec9b; float:left; margin: 0px 1px 0px 8px;">  
<?php 
 echo CHtml::ajaxLink("Teams",  array('AjaxShowTeamsRequests'), array( 'type'=>'POST',
	  'update'=>"#AjaxShowTeamsRequests",'live'=>false ) ,array('id'=>uniqid()  )   ); // ajax link end   
?></div><!-- NTeams_c -->
 
 <div id= "AjaxShowTeamsRequests" style="color:#545c21;background:#e2ec9b; float:left;"><?php
  $Mysqls =  Teams::model()->findAllBySql("select teams. * from tbl_users, challenger_team, teams 
 where tbl_users.id=challenger_team.challenger_id 
 AND  teams.id  = challenger_team.team_id
 AND challenger_team.challenger_id  = $to_cg_new
 AND  team_id   IN (select team_id from challenger_team where  challenger_id != $to_cg_new  )
 ") ;       
 
 if (count($Mysqls)>0)
 {
    foreach ($Mysqls as $Mysql)
	{

		if (count($Mysqls)>0)
		{
	    $new_Mysqls =  ChallengerTeam::model()->findAllBySql("select * from challenger_team where team_id =  $Mysql->id   AND challenger_team.status_cg  = 'request' ") ;
		$team_title =  Teams::model()->findByPk($Mysql->id)->title;
		}
	
		if (count($new_Mysqls)>0)
		 {	
			foreach ($new_Mysqls as $new_Mysql )
			{ 
			 	if ($new_Mysql->read_cg == "no" && $new_Mysql->asker == "user")
			 	{
					static $i=0;
					$i++;
			 	}
			}
		 }

	}
 }
	?>	
<span  id ="ReadMembers" style="color:#ffffff;background:#e10347; float:left; margin: 0px 0px 0px 1px;">
<?php  
/*
$ChallengerTeam =  ChallengerTeam::model()->findAllByAttributes(array('challenger_id'=> Yii::app()->user->id,'asker'=>'admin','status_cg'=>'request' )) ;
 if (count($ChallengerTeam>0))
 {	
		 if (isset ($i))
		 {
		 		 $i2 = count($ChallengerTeam);
				 $i = $i+ $i2;
		 }

		 else
		 { echo count($ChallengerTeam) ; echo "from i2";}
 
 }
*/
 if ( isset ($i) ){echo $i; }  ?>

</span>  

	   </div> <!--AjaxShowTeamsRequests -->
	  

</div><!-- AjaxShowTeamsRequests -->

<!--  Teams End -->   
	
	
<!-- general notification start -->  	
  <div id= "NNotification_c" style="color:#545c21;background:#e2ec9b;  float:left; margin: 0px 1px 0px 8px;">
<?php echo 
CHtml::ajaxLink("Notifications",array('ShowAllNotifications'), array('type'=>'POST','update'=>"#ShowAllNotifications",'live' =>'false'),array('id' => uniqid() )	);  
?> 
  <?php $Mysqls =   Notifications::model()->findAllBySql("select * from Notifications where to_cg = $to_cg_new  AND read_cg = 'no' ") ; ?>		
 <span  id ="ReadNotifications" style="color:#ffffff;background:#e10347;  float:right; margin: 0px 0px 0px 1px;"><?php  if (count($Mysqls)>0){echo count($Mysqls);} ?></span> 
  </div><!-- NNotifications_c -->
 
 <div id= "ShowAllNotifications"  style="color:#545c21;background:#e2ec9b; float:left;">
 
 </div> <!--  ShowAllNotifications end -->

<!-- general notification End --> 

<div style="clear:both"></div>
</div> <!-- notification End -->  	

<?php 
 
 }
?>