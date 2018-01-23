<div id="AddLessonCall_con">
<input type="text"  class="title_ex"  maxlength="45" size="56"  placeholder="Lesson title">
<textarea  class="note"  cols="10" rows="1"  placeholder="Lesson note"></textarea><?php

echo CHtml::ajaxLink("",  array('AddLessondata'), array( 'type'=>'POST','data'=>array(  
  'note'=>'js:$(this).prev(\'.note\').val()','title_ex'=>'js:$(this).prev(\'.note\').prev(\'.title_ex\').val()' 
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'AddLessondata4')); 
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
'script'=>$this->createUrl('UploadLesson4'),
'fileExt' => '*.docx;*.doc;',
'fileDesc' =>  '*.docx;*.doc;',
'buttonText'=>('Save Lesson'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#all_lessons4").load(\''.$this->createUrl("GetAlllessonsByWeek", array(
)
).'\'); 
   $(".AddLessondata4").click();
  
  $("#AddLessonCall4").load(\''.$this->createUrl("AfterLessonDone", array(
)
).'\'); 
  
  
}',
));
 
?>
</div>