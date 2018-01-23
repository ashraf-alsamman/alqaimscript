<div class = "tools_con_edit_ex">
<?php 
$data =  LessonPlannerLesson::model()->findByAttributes(array('id'=>$lesson_id)) ;
?>
<input type="text"  class="title_ex"  maxlength="45" size="56"  placeholder="Lesson title" value="<?php echo $data->title ;?>" >
<textarea  class="note"  cols="50" rows="2"  placeholder="Lesson note"><?php echo $data->note ;?></textarea>
<?php

echo CHtml::ajaxLink("save without upload",  array('EditLesson'), array( 'type'=>'POST','data'=>array(  
  'note'=>'js:$(this).prev(\'.note\').val()','title_ex'=>'js:$(this).prev(\'.note\').prev(\'.title_ex\').val()' 
  ,'lesson_id'=>$lesson_id ,'lesson_planner_id'=>$lesson_planner_id,'lesson_planner_week_id'=>$lesson_planner_week_id
 ),'update'=>"#all_lessons$lesson_planner_week_id",
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'AddLessondata1 da-button green')); 
 ?><br><?php
 
 $NewLessonPlannerLesson = new LessonPlannerLesson;
$this->widget('ext.uploadify.MUploadify',array(
  'name'=>"LessonPlannerLesson_name",
  'scriptData' => array(
  'lesson_id' =>$lesson_id,
 ),
'model'=>$NewLessonPlannerLesson,
     //   'debug' => true,
'attribute'=>'upload_ex',
'script'=>$this->createUrl('EditUploadLesson'),
'fileExt' => '*.docx;*.doc;',
'fileDesc' =>  '*.docx;*.doc;',
'buttonText'=>('Edit with upload'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){

   $(".AddLessondata1").click();
  

  
  
}',
));
 
?>
</div><!--tools_con_edit_ex-->