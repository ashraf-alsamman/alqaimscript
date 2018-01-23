<?php
$this->breadcrumbs=array(
	'Time Table',
);

$this->menu=array(
	array('label'=>'Create TimeTable', 'url'=>array('create')),
	array('label'=>'Manage TimeTable', 'url'=>array('admin')),
);
?>

<h1>Time Table</h1>
<?php 




 $days =   Days::model()->findAllBySql("select * from days") ;
 $lessons =   Lessons::model()->findAllBySql("select * from lessons") ;
 $classs =   ClassesM::model()->findAllBySql("select * from classes_m") ;
foreach ($days as $day)
{

?><div class ="right_side"   style ="background:#e1f1f5;border:2px solid #bcd2d7; padding:0px 2px;   "><?php 
?><hr><div  style ="background:#a7d0dc ; padding:7px 2px;  "><?php echo $day->title .'<hr>';?> </div><hr><?php


	foreach ($lessons as $lesson)
	{

?><hr><div  style ="background:#f3f1c0 "><?php echo $lesson->title .'<hr>';?> </div><hr><?php
	                foreach ($classs as $class)
					{
					?><div  id ="<?php echo 'day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id ;?>" style ="background:#f6ddcd; border:2px solid #bcd2d7; padding:1px 1px; float:left; width: 112px">
					<?php echo $class->title .'<hr>'; 
					
	
		 $teachers	= Teachers::model()->findAllBySql("select * from teachers") ;
	 ?><select  class="teacher"> <option value="" >select a teacher</option><?php           
	 foreach($teachers as $teacher) {  ?> <option value="<?php echo $teacher->id; ?>"
	 <?php 
$TimeTable_R = TimeTable::model()->findByAttributes(array(
'day_id'=>$day->id,'lesson_id'=>$lesson->id
 ,'class_id'=>$class->id,'teacher_id'=>$teacher->id
)) ;
	 if  ($TimeTable_R ) {echo "selected";}?>><?php echo $teacher->name; ?> </option><?php }  ?></select><?php	

	 $subjects	= Subjects::model()->findAllBySql("select * from subjects") ;
	 ?><select  class="subject"><option value="" >select a subject</option><?php           
	 foreach($subjects as $subject) {  ?> <option value="<?php echo $subject->id; ?>"><?php echo $subject->title; ?> </option><?php } 
	 ?></select><?php		

			
echo CHtml::ajaxLink("save",  array('TimeTableSave'), array( 'type'=>'POST',
'data'=>array('day_id'=>$day->id,'lesson_id'=>$lesson->id,'class_id'=>$class->id, 
 'subject_id'=>'js:$(this).prev(\'.subject\').val()','teacher_id'=>'js:$(this).prev(\'.subject\').prev(\'.teacher\').val()' ),
	'update'=>'#day'.$day->id.'lesson'.$lesson->id.'classe'.$class->id,	  'live' =>'false'),array('id' =>uniqid() ));  		
					



					
					
					
					?></div><?php
					
					
					
					
					
					
					
					}
	
	
	}


?> </div><?php
}
 















 
/*
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));
*/
?>
