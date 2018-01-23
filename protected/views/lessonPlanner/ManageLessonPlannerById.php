<?php
 $my_id = Yii::app()->user->id ;	
	
$LessonPlannerHistory = LessonPlannerLesson::model()->findByAttributes(array('adder_id'=>$my_id),array('order'=>'id DESC')) ;    
 if ($LessonPlannerHistory){
$lesson_planner_week_id =  $LessonPlannerHistory->lesson_planner_week_id;
 $lesson_planner_id =  $LessonPlannerHistory->lesson_planner_id ;
 }

	
if (Yii::app()->session['add_lesson_start_ex']==1){Yii::app()->session['add_lesson_start_ex']==0;}

  
  
$all_lessons =  LessonPlannerLesson::model()->findAllByAttributes(array('adder_id'=>$my_id
,'lesson_planner_week_id'=>$lesson_planner_week_id)) ;

?><div style=" margin-left: 0px;" class="da-form-item large">
<div class="da-panel collapsible"id ="week_table_<?php echo $lesson_planner_week_id?>"><div class="da-panel-content"><table class="da-table">
<thead><tr id ="table_header_<?php echo $lesson_planner_week_id?>"><th>Title</th><th>Note</th><th style="width: 20px">Manage</th><th style=" text-align:center;">Download</th></tr></thead>
<tbody>
 

	

<?php foreach ($all_lessons as $lesson) {  ?>
 <tr class="odd" id="lesson<?php echo $lesson->id ?>" >
<td><?php 
     if ($lesson->title == ''){echo "untitled lesson"." " ;}
     echo  $lesson->title;
?></td>
<td><?php 
     if ($lesson->note == ''){echo "empty"." " ;}
     echo  $lesson->note;
?></td>
<td><?php 	  
echo CHtml::ajaxLink("",  array("DeleteLesson"), array( 'type'=>'POST','data'=>array(  
'lesson_id' =>$lesson->id ,'week_id' =>$lesson_planner_week_id,'lesson_planner_id' =>$lesson_planner_id ),
'update'=>"#lesson$lesson->id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'delete_ex_m4'  
,'confirm'=>"Are you sure you want to delete " . $lesson->title));  
 
echo CHtml::ajaxLink("",  array("EditLessonCall"), array( 'type'=>'POST','data'=>array(  
'lesson_id' =>$lesson->id,'lesson_planner_week_id' =>$lesson_planner_week_id,'lesson_planner_id' =>$lesson_planner_id ),
'update'=>"#lesson$lesson->id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'edit_ex_m'
)); 
?> 
</td>
 
 <td class="da-icon-column"  style="width: 20px">

 <?php echo     CHtml::link('	<span class="da-summary-icon" style=" 
	    background-color: #61a5e4;border-radius: 6px 6px 6px 6px; display: block; float: left;
	    height: 35px; position: relative;width: 50px; text-align: center;">
	 <img alt="" src="images/icons/white/32/arrow_down.png"></span>',"/dashboard/uploads/Lesson_Planner_uploads/".$lesson->upload_ex,array('class'=>'donwload_link') ) ;
?>
</td>
    </tr>
   <?php /*end week foreach*/ }  ?>  	       
  </tbody></table></div></div>
</div><!---da-form-row---->

			<div id ="week_tools_ex">
<div id ="AddLessonCall<?php echo $lesson_planner_week_id?>"><div id ="week_tools_field_ex">
<?php echo CHtml::ajaxLink("Add Lesson",  array("AddLessonCall"), array( 'type'=>'POST','data'=>array(  
'lesson_planner_week_id' =>$lesson_planner_week_id,'lesson_planner_id' =>$lesson_planner_id ),
 'update'=>"#AddLessonCall$lesson_planner_week_id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue'));  					
?></div><!--week_header_field_ex-->
</div><!--week_header_field_ex-->

<div id ="week_tools_field_ex"></div><!--week_header_field_ex-->
		    </div><!--week_tools_ex-->
