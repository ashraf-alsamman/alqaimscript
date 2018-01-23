<?php  include 'lang.php';  ?>

<div id="NewTM"> <?php 
 echo CHtml::ajaxLink(Yii::t($language,"New Week"),  array('NewTMCall'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet),
'update'=>"#NewTM",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'da-button blue',
));	
 ?></div>


<br>

<?php

$TimeLine_weeks =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$DefaultLessonPlannerByGet ,'show_ex'=> 1 )) ;
if(count($TimeLine_weeks)>0){
foreach ($TimeLine_weeks as $week) {  
	static $weekOrder = 0; $weekOrder++ ;
 $lesson_planner_week_id = $week->id ;
 $all_lessons =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$lesson_planner_week_id)) ;
}
 ?>
<div class="grid_4" id="grid_4"><div class="da-panel collapsible"  id="ActiveTimeline"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
<?php echo Yii::t($language,'Active Weeks') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th><?php echo Yii::t($language,'From') ?></th><th><?php echo Yii::t($language,'To') ?></th><th><?php echo Yii::t($language,'Manage') ?></th><th><?php echo Yii::t($language,'Activate') ?></th></tr>
</thead><tbody>
                                            
 <?php  foreach ($TimeLine_weeks as  $value) {?>
    <tr  id="DefaultLessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
        <td><?php echo $value->from_date_ex ; ?></td>
        <td><?php echo $value->to_date_ex ; ?></td>
    <td class="da-icon-column" style="width:46px;padding: 1px 2px 3px 26px;">


 <?php 
 echo CHtml::ajaxLink("",  array('DeleteTM'), array( 'type'=>'POST',
'data'=>array('week_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m29898',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->title"
));	
 ?>

<?php 
 echo CHtml::ajaxLink("",  array('UpdateActiveTMCall'), array( 'type'=>'POST',
'data'=>array('week_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'edit_ex_m9854',
));	
 ?>
    </td>
<td class="da-icon-column" id="column_<?php echo $value->id;?>" style="width:46px;padding: 1px 2px 3px 26px;"><?php
 
 	 echo CHtml::ajaxLink("",  array('DeactivateDefaultLessonPlannerById'), array( 'type'=>'POST',
'update'=>".container",
'data'=>array('DefaultLessonPlanner_id'=>$value->id,'DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want deactivate')." $value->title"
));
 
?></td>  

    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            

</div>

	

 	                         



<?php } else {?>	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No Active Weeks') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->
<?php }?>

<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------inactive timeline weeks-------------------------> 
  <div class="grid_3" style="width: 98%;">
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php
/* @var $this LessonPlannerController */
/* @var $dataProvider CActiveDataProvider */







$TimeLine_weeks =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$DefaultLessonPlannerByGet ,'show_ex'=>0 )) ;
if(count($TimeLine_weeks)>0){
foreach ($TimeLine_weeks as $week) {  
	static $weekOrder = 0; $weekOrder++ ;
 $lesson_planner_week_id = $week->id ;
 $all_lessons =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$lesson_planner_week_id)) ;
}
 ?>
<!--grid-----><div ><div class="da-panel collapsible"  id="InactiveTimeline"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
<?php echo Yii::t($language,'Inactive Weeks') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th><?php echo Yii::t($language,'From') ?></th><th><?php echo Yii::t($language,'To') ?></th><th><?php echo Yii::t($language,'Manage') ?></th><th><?php echo Yii::t($language,'Activate') ?></th></tr>
</thead><tbody>
                                            
 <?php  foreach ($TimeLine_weeks as  $value) {?>
    <tr  id="DefaultLessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
        <td><?php echo $value->from_date_ex ; ?></td>
        <td><?php echo $value->to_date_ex ; ?></td>
    <td class="da-icon-column" style="width:46px;padding: 1px 2px 3px 26px;">


 <?php 
 echo CHtml::ajaxLink("",  array('DeleteTM2'), array( 'type'=>'POST',
'data'=>array('week_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m29898',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->title"
));	
 ?>

<?php 
 echo CHtml::ajaxLink("",  array('UpdateInactiveTMCall'), array( 'type'=>'POST',
'data'=>array('week_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'edit_ex_m9854',
));	
 ?>
    </td>
<td class="da-icon-column" id="column_<?php echo $value->id;?>" style="width:30px;padding: 1px 2px 3px 26px;"><?php
 
 	 echo CHtml::ajaxLink("",  array('ActivateDefaultLessonPlannerById'), array( 'type'=>'POST',
'update'=>".container",
'data'=>array('DefaultLessonPlanner_id'=>$value->id,'DefaultLessonPlannerByGet'=>$DefaultLessonPlannerByGet),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'deactivate_ex_m2', 
'confirm'=>Yii::t($language,'are you sure you want activate')." $value->title"
));
 
?></td>  

    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            

</div>

	

 	                         



<?php } else {?>	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No Inactive Exist</blockquote></td>
</tr>
 </tbody></table><!----da-panel-content---->
<?php }?>
  
  
   
