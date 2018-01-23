 

 		

<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDefaultDataById'), array( 'type'=>'POST',
'update'=>"#InactiveLessonPlanners",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));


?>