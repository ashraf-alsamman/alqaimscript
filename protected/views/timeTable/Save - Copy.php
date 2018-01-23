<div  id ="<?php echo 'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;?>" class="tt_just_saved"> <?php 
echo 'classes '.$class_id."<br><br>";


 	echo CHtml::ajaxLink("remove",  array('Remove'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id , 
 ),
	'replace'=>'#day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id,	  'live' =>'false'),array('class'=>'.da-button.red ','id' =>uniqid() ));

$subjects	= Subjects::model()->findAllBySql("select * from subjects where id != 1") ;
$id_r = 'day'.$day_id.'lesson'.$lesson_id.'classe'.$class_id ;
 
 echo CHtml::dropdownList('Subjects','id',CHtml::listData($subjects, 'id', 'title' ),   
array(
'options' => array($subject_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeOldSubject'), 'type' => 'POST','update'=>"#school_id$id_r",                              
'data'=>array(

'subject_id'=>'js:$(this).val()','day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, ), )),                          
 'style'=>'width:100px;','class'=>'subject green_select')  ) ;
	


    $TeacherSubject = Staff::model()->findAllBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts
WHERE ts.subject_id = $subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id");

//https:www.facebook.com/pages/Internetion-Network-System-company-%D8%A7%D9%86%D8%AA%D8%B1%D9%86%D8%AA-%D8%B3%D9%8A%D8%B3%D9%83%D9%88%D9%85/121158761317165
 
 ?><div id ="school_id<?php echo $id_r;?>"><?php 
echo CHtml::dropdownList('Staff','id',CHtml::listData($TeacherSubject, 'id', 'name'),  
array(
'options' => array($teacher_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array( 
'subject_id'=>$subject_id,'teacher_id'=>'js:$(this).val()', 'day_id'=>$day_id,'lesson_id'=>$lesson_id,'class_id'=>$class_id,'time_table_id'=>$time_table_id, ), )),                          
 'style'=>'width:100px;','class'=>'teacher green_select' )  );
	?><div id ="_id<?php echo $id_r;?>"> </div>  </div></div>
	

