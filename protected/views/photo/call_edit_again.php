<?php

 echo CHtml::link('delete',"#",array("submit"=>array('delete','id'=>$image_id),'confirm'=>'Are you sure ?'));
echo "<br>";
echo Photo::model()->findByPk($image_id)->info_cg ;
echo "<br><br>";
echo CHtml::ajaxLink("Edit information",  array('EditInfo'), array(
		        'type'=>'POST',
		'data'=>array(
		            'image_id'=>$image_id,
		        ),
		'update'=>"#info",
'live' =>'false'
		
	)
		,array('id' => 'send-link-'.uniqid())         );    			
		
?>