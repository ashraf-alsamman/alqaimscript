<?php 

 
$data2 = Students::model()->findAll() ;   
 if (count($data2)>0){}else{
 		
?>
<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('NoDataBy'), array( 'type'=>'POST',
'update'=>"#grid_4",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }
?>