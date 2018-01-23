<div id="AddLessonCall_con<?php echo $lesson_planner_week_id; ?>">
<input type="text"  class="title_ex3"  maxlength="45" size="56"  placeholder="Lesson title">
<textarea  class="note"  cols="10" rows="1"  placeholder="Lesson note"></textarea><?php

echo CHtml::ajaxLink("",  array('AddLessondata'), array( 'type'=>'POST','data'=>array(  
  'note'=>'js:$(this).prev(\'.note3\').val()','title_ex'=>'js:$(this).prev(\'.note3\').prev(\'.title_ex3\').val()' 
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'AddLessondata3')); 
 ?><br><?php
 
 $NewLessonPlannerLesson = new LessonPlannerLesson;
$this->widget('ext.uploadify.MUploadify',array(
  'name'=>"LessonPlannerLesson_name$lesson_planner_week_id",
  'scriptData' => array(
  'lesson_planner_week_id' =>$lesson_planner_week_id,
  'lesson_planner_id' =>$lesson_planner_id,
  'adder_id' => $my_id = Yii::app()->user->id
 ),
'model'=>$NewLessonPlannerLesson,
     //   'debug' => true,
'attribute'=>'upload_ex',
'script'=>$this->createUrl('UploadLesson3'),
'fileExt' => '*.docx;*.doc;',
'fileDesc' =>  '*.docx;*.doc;',
'buttonText'=>('Save Lesson'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#all_lessons3").load(\''.$this->createUrl("GetAlllessonsByWeek", array(
)
).'\'); 
   $(".AddLessondata3").click();
  
  $("#AddLessonCall3").load(\''.$this->createUrl("AfterLessonDone", array(
)
).'\'); 
  
  
}',
));
 
?>
</div>