
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php
/* @var $this LessonPlannerController */
/* @var $dataProvider CActiveDataProvider */






$DefaultLessonPlannerByGet =$default_lesson_planner_id ;
$TimeLine_weeks =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$DefaultLessonPlannerByGet ,'show_ex'=> 0 )) ;
if(count($TimeLine_weeks)>0){
foreach ($TimeLine_weeks as $week) {  
	static $weekOrder = 0; $weekOrder++ ;
 $lesson_planner_week_id = $week->id ;
 $all_lessons =  TimeLine::model()->findAllByAttributes(array(
'default_lesson_planner_id'=>$lesson_planner_week_id)) ;
}
 ?>
<div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
Inatcive Timeline Weeks</span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th>Title</th><th>From</th><th>To</th><th>Manage</th><th>Activate</th></tr>
</thead><tbody>
                                            
 <?php  foreach ($TimeLine_weeks as  $value) {?>
    <tr  id="DefaultLessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
        <td><?php echo $value->from_date_ex ; ?></td>
        <td><?php echo $value->to_date_ex ; ?></td>
    <td class="da-icon-column" style="width:30px;padding: 1px 2px 3px 26px;">


 <?php 
 echo CHtml::ajaxLink("",  array('DeleteTM2'), array( 'type'=>'POST',
'data'=>array('week_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m29898',
'confirm'=>"are you sure you want delete $value->title"
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
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>"are you sure you want activate $value->title"
));
 
?></td>  

    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div>
<?php } ?>  