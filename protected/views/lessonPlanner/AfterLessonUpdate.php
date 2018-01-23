 <div class = "tools_con_edit_ex">
<?php 
 
	$all_lessons =  LessonPlannerLesson::model()->findAllByAttributes(array('adder_id'=> Yii::app()->user->id 
,'lesson_planner_week_id'=>$lesson_planner_week_id,'lesson_planner_id'=>$lesson_planner_id

)) ;
foreach ($all_lessons as $lesson) {  ?>
	<div id="lesson<?php echo $lesson->id ?>"  class= "lesson">
		
         <?php 
     if ($lesson->title == ''){echo "untitled lesson"." " ;}
     echo  $lesson->title;
     echo     CHtml::link(" Download ","/dashboard/uploads/Lesson_Planner_uploads/".$lesson->upload_ex,array('class'=>'donwload_link') ) ;
		  
		  
echo CHtml::ajaxLink("delete ",  array("DeleteLesson"), array( 'type'=>'POST','data'=>array(  
'lesson_id' =>$lesson->id ),
'update'=>"#lesson$lesson->id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid()  
,'confirm'=>"Are you sure you want to delete " . $lesson->title));  

echo CHtml::ajaxLink("edit",  array("EditLessonCall"), array( 'type'=>'POST','data'=>array(  
'lesson_id' =>$lesson->id,'lesson_planner_week_id' =>$lesson_planner_week_id,'lesson_planner_id' =>$lesson_planner_id ),
'update'=>"#lesson$lesson->id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid()  
)); 
		    
          ?>                       
    </div><!--lesson-->
	<?php 
/*end all_lessons foreach*/ 
 }

 ?> 
 </div><!--tools_con_edit_ex-->