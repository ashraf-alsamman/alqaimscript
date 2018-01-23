<?php 

 
$data2 = Students::model()->findAllBySql("select * from students where grade = '' ");   
 if (count($data2)>0){}else{
 		
?>
<script>
   $(document).ready(function () {
   $("#go98").click();
});
</script>
<?php
 	echo CHtml::ajaxLink("",array('GoNoData'), array( 'type'=>'POST',
'update'=>"#Students_not_in_grade",
 'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'go98',
 

));
 }

?>