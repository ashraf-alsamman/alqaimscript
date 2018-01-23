
<label for="Students_about">Title</label>
<input type="text" id="Students_name" name="Students[name]" class="title_ex"  maxlength="45" size="45"><br>
<label for="Students_about">Note</label><textarea  class="note"  cols="60" rows="1"></textarea><br>
<?php
echo CHtml::ajaxLink("",  array('AddLessondata'), array( 'type'=>'POST','data'=>array(  
  'note'=>'js:$(this).prev(\'.note\').val()','title_ex'=>'js:$(this).prev(\'.note\').prev(\'.title_ex\').val()' 
 ),'update'=>"#aaaaaaaaaaaaa",
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'AddLessondata1')); 
 	 
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
'script'=>$this->createUrl('UploadLesson1'),
'fileExt' => '*.png;*.jpg;*.gif;',
'fileDesc' => '*.png;*.jpg;*.gif;',
'buttonText'=>('Save Lesson'),
'auto'=>true,
'onAllComplete'=>'js:function(event, ID, fileObj, response, data){
$("#all_lessons1").load(\''.$this->createUrl("GetAllLessons", array()).'\'); 
   $(".AddLessondata1").click();
  
}',
));

?>
