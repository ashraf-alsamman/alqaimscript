<div class="grid_3">
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php
Yii::app()->session['add_lesson_start_ex']=0 ;
$l_p_id = LessonPlanner::model()->findByPk($model->id)->default_lesson_planner_id;
$TimeLine_weeks =  TimeLine::model()->findAllByAttributes(array(
'show_ex'=> 1,'default_lesson_planner_id'=>$l_p_id)) ;
foreach ($TimeLine_weeks as $week) {  
	static $weekOrder = 0; $weekOrder++ ;
 $lesson_planner_week_id = $week->id ;
 $all_lessons =  LessonPlannerLesson::model()->findAllByAttributes(array('adder_id'=> Yii::app()->user->id 
,'lesson_planner_week_id'=>$lesson_planner_week_id,'lesson_planner_id'=>$model->id)) ;
?>

<div class="da-panel collapsible" style=" margin-bottom: 5px;"><!--Classes start-->

<div class="da-panel-header"><span class="da-panel-title">
<img src="images/icons/color/ui_combo_box.png"><?php echo "week " .$weekOrder.'&nbsp &nbsp &nbsp &nbsp From '.$week->from_date_ex .'&nbsp &nbsp &nbsp &nbsp To '.$week->to_date_ex ;?></span>
<span class="da-panel-toggler"></span></div>
<div class="da-panel-content">
<div id="ManageClasses"><div style="margin: 0;padding: 0;" class="da-form-row"> 
<?php	if ($all_lessons){?>
	<div  id="all_lessons<?php echo $week->id?>">
<div style=" margin-left: 0px;" class="da-form-item large">           	 	 
<div class="da-panel collapsible"id ="week_table_<?php echo $week->id?>"><div class="da-panel-content"><table class="da-table">
<thead><tr id ="table_header_<?php echo $week->id?>"><th>Title</th><th>Note</th><th style="width: 20px">Manage</th><th style=" text-align:center;">Download</th></tr></thead>
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
'lesson_id' =>$lesson->id ,'week_id' =>$week->id,'lesson_planner_id' =>$lesson_planner_id ),
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
</div><!--DeleteClasses-->                                            
<?php /*end if lessons exist*/ }  			
		else{ ?>  <div id= "all_lessons<?php echo $week->id;?>"><div  class="da-panel-content" ><table class="da-table"><tbody>
	<tr class="odd" >
		<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
			No Lessons Exist</blockquote>
		</td>
	</tr> 
</div></tbody></table></div><!----da-panel-content----></div> <?php } ?>		
		
			<div id ="week_tools_ex">
<div id ="AddLessonCall<?php echo $week->id?>"><div id ="week_tools_field_ex">
<?php echo CHtml::ajaxLink("Add Lesson",  array("AddLessonCall"), array( 'type'=>'POST','data'=>array(  
'lesson_planner_week_id' =>$week->id,'lesson_planner_id' =>$model->id ),
 'update'=>"#AddLessonCall$week->id",	  'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue'));  					
?></div><!--week_header_field_ex-->
</div><!--week_header_field_ex-->

<div id ="week_tools_field_ex"></div><!--week_header_field_ex-->
		    </div><!--week_tools_ex-->
                                </div></div><!--ManageClasses-->
 
</div>
</div>
	<div id ="week_con_ex">
<div class="all_lessons">


</div><!--all_lessons_class-->



	</div><!--week_con_ex-->
 <!--//////////////////////////////////////////////////////////////////////////////////-->

<?php /*end week foreach*/ }  /*end if active lesson plannner not exist*/   ?> 
</div>
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!-----------------------------------------------------------------------------------> 
  
  
  
   
