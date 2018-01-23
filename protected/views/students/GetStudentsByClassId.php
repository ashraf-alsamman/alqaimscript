<?php  include 'lang.php';  ?>
<script>
$(document).ready(function(){
 
 var id_T =<?php echo $class_id;?> ;
     $("#active_job_titleqq"+id_T).show("slow");
$("#job_title_header_idqq"+id_T).click(function () {
$("#active_job_titleqq"+id_T).slideToggle("slow");
});
}); 
</script>

<h3  id ="job_title_header_idqq<?php echo $class_id;?>"  style="background-color: #ffffff;font-size: 12px;margin-left:20px; " class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" style="" role="tab" aria-expanded="true" aria-selected="true" tabindex="0"> 
<span class="ui-icon ui-icon-triangle-1-e"></span>

<?php $students_count= Students::model()->findAllByAttributes(array('grade'=>$grade_id,'class_m'=>$class_id)) ;  ?>

<a tabindex="-1"><span style="font-size:14px"><?php echo$class_title ;?></span><span class="note_m" style="background: #9ec8be"><?php echo Yii::t($language,'Loaded') ?> <?php echo count($students_count) ;?></span></a></h3>
<div  style="padding: 0;"  id ="active_job_titleqq<?php echo $class_id;?>" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" role="tabpanel">

 <div id="da-ex-accordion-plain" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">

<h3    style="background-color: #ffffff;font-size: 12px;margin-left:20px; " class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" style="" role="tab" aria-expanded="true" aria-selected="true" tabindex="0"> 
<span class="ui-icon ui-icon-triangle-1-e"></span>

<span ><?php
$this->renderPartial('StudentsByClassId',
array('grade_id'=>$grade_id,'class_id'=>$class_id));
?></span></h3></div> </div>

 </div>   

