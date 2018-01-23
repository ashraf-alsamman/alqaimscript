 <div id ="ManageAuth_<?php echo  $controller_id ; ?>">
 	
 	<?php echo $controller_title ;    

 echo CHtml::ajaxLink("Add Auth",  array('AddAuthCall'), 
 array( 'type'=>'POST','data'=>array(
	 'controller_id'=>$controller_id),'update'=>"#ManageAuth_$controller_id", 'live' =>'false'),array('id' => 'send-link-'.uniqid() )); 
	?>

	 ?></div><!--ManageAuth-->