<?php 

 
$data2 = Staff::model()->findAllByAttributes(array('job_title'=>$job_title_id),array('order'=>'id DESC')) ;   
 if (count($data2)>0){}else{
 		
?>
<script>
	$(document).ready(function () {
   $("#go").click();
});
</script>
<?php
		
 	echo CHtml::ajaxLink("",array('NoStaffById'), array( 'type'=>'POST',
'data'=>array('job_title_id'=>$job_title_id,'job_title'=>$job_title),
'update'=>"#active_job_title$job_title_id",
//'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go',
 

));
 }

 
 
?>