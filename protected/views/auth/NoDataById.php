<?php 

 
$data2 = ExAuthRel::model()->findAllByAttributes(array(
'job_title_id'=>$job_title_id,'controller_id'=>$PageCategory),array('order'=>'id DESC')) ;   
 if (count($data2)>0){}else{
?>
<script>
	$(document).ready(function () {
   $("#go").click();
});
</script>
<?php
		
 	echo CHtml::ajaxLink("",array('NoDataById'), array( 'type'=>'POST',
'data'=>array('PageCategory'=>$PageCategory),
'update'=>"#PageCategory_$PageCategory$job_title_id",
//'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go',
 

));
 }

 
 
?>