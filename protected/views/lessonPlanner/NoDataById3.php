<?php 
 $my_id = Yii::app()->user->id ;
 $data2 =  LessonPlanner::model()->findAllBySql("select * from lesson_planner where  status = 0") ;  

 if (count($data2)>0){}else{ ?>
 		

<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDataById3'), array( 'type'=>'POST',
'update'=>"#InactiveLessonPlanners",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>