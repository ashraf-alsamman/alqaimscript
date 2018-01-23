	<?php  include 'lang.php';  ?>
		<?php
$TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$time_table_id,'day_id'=>$day_id,'lesson_id'=>$lesson_id ,'class_id'=>$class_id)) ;
$id_r = 'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;

if ($TimeTable_class){
    $TeacherSubject = Staff::model()->findAllBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts 
WHERE ts.subject_id = $TimeTable_class->subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class_id )
");
    $TeacherSubject2 = Staff::model()->findBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts 
WHERE ts.subject_id = $TimeTable_class->subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class_id )
"); 
$style= "background:#d9eabe; border:2px solid #bcd2d7; padding:1px 1px; float:left; width: 112px ;-moz-opacity:0.2;color:#6f9e40";
 
?><div  id ="<?php echo 'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;?>" class ="time_table_old"><?php echo ClassesM::model()->findByAttributes(array('id'=>$class_id))->title ;; 
?><div class="hidden_class"> <hr><?php
 $subjects	= Subjects::model()->findAllBySql("select * from subjects where id != 1") ;

 	echo CHtml::ajaxLink(Yii::t($language,'Delete'),  array('Remove'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id,  

 ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,'live' =>'false'),array('id' =>uniqid() )); 
 
 echo CHtml::dropdownList('Subjects','id',CHtml::listData($subjects, 'id', 'title' ),   
array(
'options' => array($TimeTable_class->subject_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeOldSubject2'), 'type' => 'POST','update'=>"#school_id$id_r",                              
'data'=>array('subject_id'=>'js:$(this).val()','day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id
,'old_subject_id'=>$TimeTable_class->subject_id,'old_teacher_id'=>$TimeTable_class->teacher_id ), )),                          
 'style'=>'width:100px;','class'=>'subject green_select')  ) ;
	





// $teachers	= Staff::model()->findAllBySql("select * from staff where teacher = 1") ;
 ?><div id ="school_id<?php echo $id_r;?>"><?php 

 if (count($TeacherSubject)>0)
{
 echo CHtml::dropdownList('TeacherSubject','id',CHtml::listData($TeacherSubject, 'id', 'name'),  
array(
'options' => array($TimeTable_class->teacher_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array(
'old_subject_id'=>$TimeTable_class->subject_id,
'subject_id'=>$TimeTable_class->subject_id,'teacher_id'=>'js:$(this).val()',
 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,
 'time_table_id'=>$time_table_id,
  ), )),                          
'style'=>'width:100px;','class'=>'teacher green_select' )  );	
}
/*
elseif (count($TeacherSubject)==1)
{
 echo 	$TeacherSubject2->name ;	
}
*/
	
	?><div id ="_id<?php echo $id_r;?>"> </div>

	</div> </div><!--hidden_class--> </div><?php
	}