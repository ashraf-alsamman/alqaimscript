   <?php  include 'lang.php';  ?>
   <?php
	           $id_r = 	'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;
   $TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
   
 
    $TeacherSubject = Staff::model()->findAllBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts ,classes_m AS c,teacher_class AS tc
WHERE ts.subject_id = $subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class_id )
");
    $TeacherSubject2 = Staff::model()->findBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts ,classes_m AS c,teacher_class AS tc
WHERE ts.subject_id = $subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class_id )
"); 


    if (count ($TeacherSubject) > 1)
	{

echo CHtml::dropdownList('TeacherSubject','name',CHtml::listData($TeacherSubject ,'id' , 'name' ), 
array('onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array( 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, ), )),                          
 'style'=>'width:100px;','class'=>'teacher' )  );

			echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).prev(\'.teacher\').val()' ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() )); 
 
  echo "<br>"; 
  echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelNew'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,  
// 'subject_id'=>$TimeTable_R->subject_id,
//'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'update'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
 

	 
	
	}  	
	
	elseif (count ($TeacherSubject)== 1) {
				
			echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).prev(\'.teacher\').val()' ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() )); 
 
 
 
 
				echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelNew'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
// 'subject_id'=>$TimeTable_R->subject_id,
//'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'update'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
	}
	else {echo "no teachers";}
	 
 
 
