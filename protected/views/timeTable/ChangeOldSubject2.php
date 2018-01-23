 <?php  include 'lang.php';  ?>  <?php

    // echo $old_subject_id;  echo "<hr>"  ; echo $subject_id ;
   
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

    if ($old_subject_id==$subject_id)
	{

		echo CHtml::dropdownList('TeacherSubject','name',CHtml::listData($TeacherSubject ,'id' , 'name' ), 
array(                                                                                              
'options' => array($old_teacher_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array(
'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,
'old_subject_id'=>$old_subject_id,'old_teacher_id'=>$old_teacher_id,
 ), )),                          
 'style'=>'width:100px;','class'=>'teacher' )  );
  ?><div id ="_id<?php echo $id_r;?>"></div><?php
/////////////////////////////////////////////////////////////////////////////
	












	}
else{
    if (count ($TeacherSubject) > 0)
	{
  ?><div id ="_id<?php echo $id_r;?>"><?php
echo CHtml::dropdownList('TeacherSubject','name',CHtml::listData($TeacherSubject ,'id' , 'name' ), 
array('onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher2'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array( 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,
'old_subject_id'=>$old_subject_id,'old_teacher_id'=>$old_teacher_id,
 ), )),                          
 'style'=>'width:100px;','class'=>'teacher' )  );
 


 echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
 'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).prev(\'.teacher\').val()' ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() )); 
 echo "<br>"; 
		
		$TimeTable_R = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
		
			echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('Cancel'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
'subject_id'=>$TimeTable_R->subject_id,'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
 

  ?></div><?php
	
	
	}  	
	
	/* elseif (count ($TeacherSubject)== 1) {
				
			echo CHtml::ajaxLink("save",  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
'old_subject_id'=>$old_subject_id,
 'subject_id'=>$subject_id,'teacher_id'=>$TeacherSubject2->id ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('id' =>uniqid() )); 
 
 
 
 
				echo CHtml::ajaxLink("cancel",  array('CancelNew'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, 
// 'subject_id'=>$TimeTable_R->subject_id,
//'teacher_id'=>$TimeTable_R->teacher_id, 			 
				 	),
	'update'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() ));
	}*/
	else {echo Yii::t($language,"There are no teachers");}
	 
 
 }  ?><div id ="_id<?php echo $id_r;?>"></div>
