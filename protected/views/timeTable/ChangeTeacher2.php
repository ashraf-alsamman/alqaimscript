  <?php  include 'lang.php';  ?>
   <?php 
 echo CHtml::dropdownList('TeacherSubject','name',CHtml::listData($TeacherSubject ,'id' , 'name' ), 
array(
'options' => array($teacher_id=>array('selected'=>true)),

'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher2'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array( 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,
'old_subject_id'=>$old_subject_id,'old_teacher_id'=>$old_teacher_id,
 ), )),                          
 'style'=>'width:100px;','class'=>'teacher' )  );
 
	echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,  
 'teacher_id'=>$teacher_id,'subject_id'=>$subject_id ),
 		
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() ));
	

		?><br><?php 
$TimeTable_R = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
			
			echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('Cancel'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
'subject_id'=>$TimeTable_R->subject_id,'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
 
?>

