<?php  include 'lang.php';  ?>

<h1><?php echo Yii::t($language,'Students') ?></h1>
<script>
$(document).ready(function(){

$(".ui-accordion-header").click(function () {
$(this).next(".ui-accordion-content").slideToggle("slow");
});
}); 
</script>
 <div id="da-ex-accordion-plain" class="ui-accordion ui-widget ui-helper-reset ui-accordion-icons" role="tablist">
 <?php 
      $data = Grades::model()->findAll(); 

   foreach ($data as  $value) {
?><div id ="GetStaffById<?php echo $value->id ;?>">
<h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all"role="tab" aria-expanded="false" aria-selected="false" tabindex="-1"> 
<span class="ui-icon ui-icon-triangle-1-e"></span>
<span style="font-size:14px"><?php
echo CHtml::ajaxLink("$value->title",  array('GetClassesByGradeId'), array( 'type'=>'POST','data'=>array('grade_id'=>$value->id,'grade_title'=>$value->title),
'update'=>"#GetStaffById$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
 'live' =>'false'),array('id' => 'send-link-'.uniqid() 
	)); 
?></span></h3>

</div>
<?php 
   }
   ?></div>
   







<br>
<div id="Students_not_in_classes">
<h3><?php echo Yii::t($language,'Students not in classes') ?></h3>
<?php   $Parents =  Students::model()->findAllBySql("select * from students where class_m = '' ") ; if (count($Parents)>0 ) {     ?>

<div class="grid_4" id="grid_4"><div class="da-panel collapsible"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
   <?php echo Yii::t($language,'Students') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Name') ?></th><th><?php echo Yii::t($language,'Grade') ?></th><th><?php echo Yii::t($language,'Gender') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"></th></tr>
</thead><tbody>
                                            
 <?php 
    foreach ($Parents as  $value) {?>

    <tr  id="student_id_<?php echo $value->id;?>" >
        <td><?php echo $value->name ; ?></td>
         <td><?php if ($value->grade){echo Grades::model()->findByPk($value->grade)->title;} ?></td>
        <td><?php if ( $value->sex == 1){echo Yii::t($language,"Male");} else {echo Yii::t($language,"female");}   ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="Students/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="Students/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php echo CHtml::ajaxLink("",  array('dfi22'), array( 'type'=>'POST',
'data'=>array('student_id'=>$value->id),
'update'=>"#student_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'style' =>'
    background: url("images/icons/color/cross.png") no-repeat scroll 0 0 transparent;
    height: 16px; margin: 1px 8px 0 2px;width: 16px;float:left;padding:0;display:block;',
'confirm'=>"are you sure you want delete $value->name"
)); ?>
    </td></tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
	 	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No students not in classes') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>
	
<?php } ?>
		                         
                                
                            
                        
<?php

 

?>





</div><!-- search-form -->

 


