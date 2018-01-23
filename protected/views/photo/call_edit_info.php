<?php
	


echo Photo::model()->findByPk($image_id)->info_cg ;

echo "<br>";



echo CHtml::ajaxLink("edit",  array('EditInfo'), array(
		        'type'=>'POST',
		
		'data'=>array(
		           'image_id'=>"$image_id",
		        ),
		'update'=>"#info",
'live' =>'false'
		)
		  
		        ,array('id' => 'send-link2-'.uniqid())         );    			
		// ajax link end 

 ?>