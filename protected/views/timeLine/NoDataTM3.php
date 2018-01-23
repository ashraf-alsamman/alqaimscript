<?php 

 $data2 =  TimeLine::model()->findAllBySql("select * from time_line where  show_ex != 1
 AND default_lesson_planner_id = $default_lesson_planner_id
 ") ;  

 if (count($data2)>0){}else{ ?>
 		

<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDataTM3'), array( 'type'=>'POST',
'update'=>"#InactiveTimeline",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>