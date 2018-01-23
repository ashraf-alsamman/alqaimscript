<?php  include 'lang.php';  ?>
<script>
$(document).ready(function(){

$(".ui-accordion-header").click(function () {
$(this).next(".ui-accordion-content").slideToggle("slow");
});
}); 
</script>
 <h1><?php echo Yii::t($language,'Staff') ?></h1>
 <div id="da-ex-accordion-plain" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
 <?php 
      $data = JobTitle::model()->findAllBySql("
      select * from job_title where id != 2 and id != 3 order by ex_order
      "); 
   foreach ($data as  $value) {
?><div id ="GetStaffById<?php echo $value->id ;?>">
<h3      class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false" aria-selected="false" tabindex="-1">
	<span class="ui-icon ui-icon-triangle-1-e">
	
</span>
<span style="font-size:14px"><?php
echo CHtml::ajaxLink("$value->title",  array('GetStaffById'), array( 'type'=>'POST','data'=>array('job_title_id'=>$value->id,'job_title'=>$value->title),
'update'=>"#GetStaffById$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
 'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	)); 
?></span></h3>

</div>
<?php 
   }
   ?>
   

</div>




