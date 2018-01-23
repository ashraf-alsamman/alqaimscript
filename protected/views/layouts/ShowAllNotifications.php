<?php 
 		$to_cg_new = Yii::app()->user->id;
		$Mysqls =  Notifications::model()->findAllBySql("select * from Notifications where to_cg = $to_cg_new ") ; 
		
		if (count($Mysqls)>0)
		{
					
		if($Mysqls) 
					{
			            foreach($Mysqls as $Mysql) 
						{
							
							if ($Mysql->type_cg == 'TeamConfirm')
							{
							echo "<br>";echo  User::model()->findByPk($Mysql->from_cg)->username ;echo " confirm your team request ";				
							}
							
							if ($Mysql->type_cg == 'TeamRefuse')
							{
							echo "<br>";echo  User::model()->findByPk($Mysql->from_cg)->username ;echo " refuse your team request ";				
							}
							
							if ($Mysql->type_cg == 'FriendConfirm')
							{
							echo "<br>";echo  User::model()->findByPk($Mysql->from_cg)->username ;echo " confirm your Friend request ";				
							}	
							
							if ($Mysql->type_cg == 'FriendRefuse')
							{
							echo "<br>";echo  User::model()->findByPk($Mysql->from_cg)->username ; echo " refuse your Friend request ";				
							}
						
			  			}
					}
		}
		 else { echo "No Notifications"; }
 ?>