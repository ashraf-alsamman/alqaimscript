<?php  include 'lang.php';  ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<?php 

 

$Days_counts = count( Days::model()->findAll());
$Lessons_counts = count( Lessons::model()->findAll());
$Classes_counts = count( ClassesM::model()->findAll());

$all_lesson_count=  $Days_counts*$Lessons_counts*$Classes_counts ;
$inserted_count = count(TimeTable::model()->findAllByAttributes(array('time_table_id'=>$model->id))  );
$not_inserted_count =  $all_lesson_count - $inserted_count ;



  

?>

<div id = "InsertCount">
<ul class="header_square_item_ul">
<!-- 
<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #a6d037;">
<div  class="header_square_num" ><?php echo $inserted_count ; ?></div>
<div class = "header_square_text" >Inserted</div>
</div><!-- header_square_item_1 
</li>-->
<!-- 
<li class="header_square_item_1"><div class="header_square_item_2" style = "border:10px solid #ea799b;">
<div  class="header_square_num"><?php  echo $not_inserted_count ; ?></div>
<div class = "header_square_text" >not inserted</div>
</div><!-- header_square_item_1 
</li>  -->



<div class = "clear"></div>
</ul>
</div>

<div class = "clear"></div>

<script type="text/javascript">
$('.time_table_not_set').hover(function(){     

$('.time_table_not_set').hide();
	});
</script>
<div class="timetable_con">


<h1> <?php echo Yii::t($language,'Manage TimeTable') ?>&nbsp<?php  echo $model->title; ?></h1><?php 

 $days = Days::model()->findAllByAttributes(array('time_table_id'=>$model->id,'status'=>'on'));
 $lessons =   Lessons::model()->findAllBySql("select * from lessons limit $model->lesson_num") ;
 
foreach ($days as $day)
{
?><div class ="right_side"  ><?php 
?><div class="week_title" ><?php echo Yii::t($language,$day->title) ;?> </div><?php

	foreach ($lessons as $lesson)
	{
?><div class="clear"></div><div   class="lesson_title"><?php echo $lesson->title;?> </div><?php

 $Grades =   Grades::model()->findAllBySql("select * from grades") ;
foreach ($Grades as $grade)
{
 
$classs =   ClassesM::model()->findAllByAttributes(array('grade_id'=>$grade->id),array('order'=>'grade_id ASC')) ;
if (count($classs) > 0){
foreach ($classs as $class)
					{
					
 
				
$TimeTable_class = TimeTable::model()->findByAttributes(array(
'time_table_id'=>$model->id,'day_id'=>$day->id,'lesson_id'=>$lesson->id ,'class_id'=>$class->id)) ;
$id_r = 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;

if ($TimeTable_class){
    $TeacherSubject = Staff::model()->findAllBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts 
WHERE ts.subject_id = $TimeTable_class->subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class->id )
");
    $TeacherSubject2 = Staff::model()->findBySql("SELECT t.*, s.title
FROM staff AS t, subjects AS s, teacher_subject AS ts 
WHERE ts.subject_id = $TimeTable_class->subject_id
AND ts.teacher_id = t.id
AND ts.subject_id = s.id
AND
  t.id  in (select teacher_id from teacher_class where    class_id  =$class->id )
"); 
$style= "background:#d9eabe; border:2px solid #bcd2d7; padding:1px 1px; float:left; width: 112px ;-moz-opacity:0.2;color:#6f9e40";
 
?><div  id ="<?php echo 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;?>" class ="time_table_old"><?php echo $class->title . $class->grade_id; 
?><div class="hidden_class"> <hr><?php
 $subjects	= Subjects::model()->findAllBySql("select * from subjects where id != 1") ;

 	echo CHtml::ajaxLink(Yii::t($language,'Delete'),  array('Remove'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day->id,'lesson_id'=>$lesson->id,'class_id'=>$class->id,'time_table_id'=>$model->id,  

 ),
	'replace'=>'#day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id,'live' =>'false'),array('id' =>uniqid() )); 
 
 echo CHtml::dropdownList('Subjects','id',CHtml::listData($subjects, 'id', 'title' ),   
array(
'options' => array($TimeTable_class->subject_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeOldSubject2'), 'type' => 'POST','update'=>"#school_id$id_r",                              
'data'=>array('subject_id'=>'js:$(this).val()','day_id'=>$day->id,'lesson_id'=>$lesson->id,'class_id'=>$class->id,'time_table_id'=>$model->id
,'old_subject_id'=>$TimeTable_class->subject_id,'old_teacher_id'=>$TimeTable_class->teacher_id ), )),                          
 'style'=>'width:100px;','class'=>'subject green_select')  ) ;
	





// $teachers	= Staff::model()->findAllBySql("select * from staff where teacher = 1") ;
 ?><div id ="school_id<?php echo $id_r;?>"><?php 

 if (count($TeacherSubject)>1)
{
 echo CHtml::dropdownList('TeacherSubject','id',CHtml::listData($TeacherSubject, 'id', 'name'),  
array(
'options' => array($TimeTable_class->teacher_id=>array('selected'=>true)),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeTeacher'), 'type' => 'POST','update'=>"#_id$id_r",                              
'data'=>array(
'old_subject_id'=>$TimeTable_class->subject_id,
'subject_id'=>$TimeTable_class->subject_id,'teacher_id'=>'js:$(this).val()',
 'day_id'=>$day->id,'lesson_id'=>$lesson->id,'class_id'=>$class->id,
 'time_table_id'=>$model->id,
  ), )),                          
'style'=>'width:100px;','class'=>'teacher green_select' )  );	
}
elseif (count($TeacherSubject)==1)
{
 echo 	$TeacherSubject2->name ;	
}
	
	
	?><div id ="_id<?php echo $id_r;?>"> </div>

	</div> </div><!--hidden_class--> </div><?php
	
	
}













// if  not set //////////////////
////////////////////////////////////
///////////////////////////////////
else {

?><div  id ="<?php echo 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;?>" class="time_table_not_set">
	
					
					<?php echo $class->title . ' grade'.$class->grade_id;
					?> <div class="hidden_class"><hr><?php
		$id_r = 	'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;
		
		 $subjects	= Subjects::model()->findAllBySql("select * from subjects") ;
echo CHtml::dropdownList('Subjects','id',CHtml::listData($subjects, 'id', 'title'),
array('onChange'=>CHtml::ajax(array('url' => CController::createUrl('Chooseactivity'), 'type' => 'POST','update'=>"#school_id$id_r",                              
'data'=>array( 
'subject_id'=>'js:$(this).val()','day_id'=>$day->id,'lesson_id'=>$lesson->id,'class_id'=>$class->id,'time_table_id'=>$model->id, ), )),                          
 'style'=>'width:100px;','class'=>'subject ' )  );
 ?><div id ="school_id<?php echo $id_r;?>"></div><?php 


	?></div></div><!-- 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;--><?php
}

				


				 
					}//classs 
    }//if classs 
}//grades
    
	}//lessons
?> </div><?php
}//days  $(":selected").css("background-color","#c23bc0");

?>
 

</div><!--timetable_con-->


 

