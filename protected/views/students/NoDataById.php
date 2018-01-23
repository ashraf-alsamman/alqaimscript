<?php 

 
$data2 = Students::model()->findAllByAttributes(array('class_m'=>$class_id),array('order'=>'id DESC')) ;   
 if (count($data2)>0){}else{
 		
?>
<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('GoNoData'), array( 'type'=>'POST',
'update'=>"#active_job_titleqq$class_id",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>