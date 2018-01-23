 <?php 
	$to_cg_new = Yii::app()->user->id ;	
 $Mysqls =  Enemies::model()->findAllBySql("select * from enemies where to_cg = $to_cg_new ") ; 
		
		if (count($Mysqls)>0)
		{
			foreach($Mysqls as $Mysql) 
			{
				echo "<br>";echo  User::model()->findByPk($Mysql->from_cg)->username ;echo "<br>";
			}
			
		}
		 else { echo "no new Enemies"; }
 ?>