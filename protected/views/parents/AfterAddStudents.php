<?php
 echo CHtml::ajaxLink("Add Student vvvvv",  array('AddStudents'), array( 'type'=>'POST','data'=>array(
 'parent_id'=>$parent_id),'update'=>"#AddStudents", 'live' =>'false'),array('id' => 'send-link-'.uniqid() )); 
?>
 




 <script type="text/javascript">
 $(function() {
$("#RefreshMyStudents").click();
 

      });
</script>