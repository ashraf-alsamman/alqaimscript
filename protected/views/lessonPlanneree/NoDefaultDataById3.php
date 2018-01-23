<?php 

 $data2 =  LessonPlanner::model()->findAllBySql("select * from default_lesson_planner where  status != 1") ;  

 if (count($data2)>0){}else{ ?>
 		

<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDefaultDataById3'), array( 'type'=>'POST',
'update'=>"#InactiveLessonPlanners",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>