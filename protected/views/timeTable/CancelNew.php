					
			<?php 		
	
		$id_r = 	'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;
		 $subjects	= Subjects::model()->findAllBySql("select * from subjects") ;
		 echo ClassesM::model()->findByPk($class_id)->title."<hr>";
echo CHtml::dropdownList('Subjects','id',CHtml::listData($subjects, 'id', 'title'),
array('onChange'=>CHtml::ajax(array('url' => CController::createUrl('Chooseactivity'), 'type' => 'POST','update'=>"#school_id$id_r",                              
'data'=>array('subject_id'=>'js:$(this).val()','day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, ), )),                          
 'style'=>'width:100px;','class'=>'subject ' )  );
 ?><div id ="school_id<?php echo $id_r;?>"></div>