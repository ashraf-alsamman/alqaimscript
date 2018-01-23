<?php  include 'lang.php';  ?>
<script>
$(document).ready(function(){
 
 var id_T =<?php echo $grade_id;?> ;
     $("#active_job_title"+id_T).show("slow");
$("#job_title_header_id"+id_T).click(function () {
$("#active_job_title"+id_T).slideToggle("slow");
});
}); 
</script>
<?php $data2 = ClassesM::model()->findAllByAttributes(array('grade_id'=>$grade_id),array('order'=>'id DESC')) ;  ?>
<h3 id ="job_title_header_id<?php echo $grade_id;?>" class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" 
style="background-color: #e5e5e5"
role="tab" aria-expanded="true" aria-selected="true" tabindex="0">
<span class="ui-icon ui-icon-triangle-1-s"></span><a tabindex="-1"><span style="font-size:14px"><?php echo $grade_title;?></span><span class="note_m"><?php echo Yii::t($language,'Loaded') ?><?php echo count($data2); ?></span></a></h3>
<div  style="padding: 0;"  id ="active_job_title<?php echo $grade_id;?>" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" role="tabpanel">













 <div id="da-ex-accordion-plain" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
 <?php 
if (count($data2)>0){
   foreach ($data2 as  $value) {
?><div id ="GetStudentsByClassId<?php echo $value->id ;?>">
 
<h3    style="background-color: #ffffff;font-size: 12px;margin-left:20px; " class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" style="" role="tab" aria-expanded="true" aria-selected="true" tabindex="0"> 
<span class="ui-icon ui-icon-triangle-1-e"></span>
<span style="font-size:12px"><?php
echo CHtml::ajaxLink("$value->title",array('GetStudentsByClassId'), array( 'type'=>'POST',
'data'=>array('grade_id'=>$grade_id,'class_id'=>$value->id,'class_title'=>$value->title),
'update'=>"#GetStudentsByClassId$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
 'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	)); 
?></span></h3></div><?php   }} else{?>
	
	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
	<tr class="odd" >
		<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">
			<?php echo Yii::t($language,'No Classes Exist') ?></blockquote>
		</td>
	</tr> 
</div></tbody></table></div><!----da-panel-content---->
	
	
	
<?php }?>  











</div>



 
  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
 </div>  
