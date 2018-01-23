  <?php  include 'lang.php';  ?>
   <?php
 
 $TimeTable_class = TimeTable::model()->findByAttributes(array(
 'time_table_id'=>$time_table_id,'subject_id'=>$old_subject_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id,'teacher_id'=>$teacher_id)) ;
   
    if ($TimeTable_class)
	{


	
	}  	
	else 
	{
 
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
	}
 
?>

