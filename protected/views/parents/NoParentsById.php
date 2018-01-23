<?php 

 
$data2 = Parents::model()->findAll() ;   
 if (count($data2)>0){}else{
 		
?>
<script>
	$(document).ready(function () {
   $("#go").click();
});
</script>
<?php 
	
 	echo CHtml::ajaxLink("",array('NoParentsById'), array( 'type'=>'POST',
// 'data'=>array('job_title_id'=>$job_title_id,'job_title'=>$job_title),
'update'=>"#grid_4",
//'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go',
 

));
 }

 
 
?>