<?php  include 'lang.php';  ?>
   <?php
	        
	           $id_r = 	'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;
	           $TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
   
 
    $TeacherSubject = Staff::model()->findAllBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts
WHERE ts.subject_id = $subject_id

AND ts.teacher_id = t.id
AND ts.subject_id = s.id");
 
 // AND t.teacher = 1
 
    if (count ($TeacherSubject) > 0)
	{

echo CHtml::dropdownList('TeacherSubject','name',CHtml::listData($TeacherSubject ,'id' , 'name' ), 
array('onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array( 'subject_id'=>$TimeTable_class->subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, ), )),                          
 'style'=>'width:100px;','class'=>'teacher green_select' )  );
	 
	$FirstTeacherSubject = TeacherSubject::model()->findByAttributes(array('subject_id'=>$subject_id));

 
$TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id,'teacher_id'=>$FirstTeacherSubject->teacher_id)) ;
 
     

	if ($TimeTable_class){	?><div id ="_id<?php echo $id_r;?>"> </div> <?php  }

	else
	{
	?><div id ="_id<?php echo $id_r;?>">		<?php 	
	echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,  
 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).parent().prev(\'.teacher\').val()' ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() )); 

			?><br><?php 
$TimeTable_R = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
			
			echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('Cancel'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
'subject_id'=>$TimeTable_R->subject_id,'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
	 

	
	
	?> </div> <?php
	
		 
 
	 
	
	
	}
	

	 
	
	}  	
	else {echo "no teachers";
		?><br><?php 
$TimeTable_R = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
			
			echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('Cancel'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
'subject_id'=>$TimeTable_R->subject_id,'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
	 	?> </div> <?php
  
	}
	

 
