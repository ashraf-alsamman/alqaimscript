<?php 
$data = TimeTables::model()->findAll() ;   
$data_count = count($data2);
 if ($data_count>0){}else{
 ?>		
<script>
   $(document).ready(function () {
   $("#CountAfterAjax").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('CountAfterAjax2'), array( 'type'=>'POST',
'update'=>"#da-ex-datatable-numberpaging_info",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'CountAfterAjax',
 

));
 }
?>