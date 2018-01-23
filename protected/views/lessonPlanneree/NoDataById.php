<?php 
 $my_id = Yii::app()->user->id ;
 $data2 =  LessonPlannerLesson::model()->findAllByAttributes(array('adder_id'=>$my_id 
,'lesson_planner_week_id'=>$week_id,'lesson_planner_id'=>$lesson_planner_id)) ;
 if (count($data2)>0){}else{
 		
?>
<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDataById'), array( 'type'=>'POST',
'update'=>"#ActiveLessonPlanner",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>