<?php 

 
$data2 = Students::model()->findAllByAttributes(array('class_m'=>$class_id)) ;   
 if (count($data2)>0){}else{
 		
?>
<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('GoNoData2'), array( 'type'=>'POST',
'update'=>"#Students",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>