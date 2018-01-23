<?php  include 'lang.php';  ?>
<?php  
if ($_GET ==55)
{
$LessonPlannerByGet =  LessonPlanner::model()->findByPk($_GET['id']);
	if($LessonPlannerByGet)
	{
		
		  if ($LessonPlannerByGet->adder_id == Yii::app()->user->id)
		  {
		 	$this->renderPartial('ManageLessonPlannerById',array(
	      'lesson_planner_id'=>$LessonPlannerByGet->id )); 	
		  }
		  else
		  {
?><div  class="da-panel-content" ><table class="da-table"><tbody>	<tr class="odd" ><td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
<?php echo Yii::t($language,'you dont have access') ?></blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----> <?php 
}
	
    }

	else {
?><div  class="da-panel-content" ><table class="da-table"><tbody>	<tr class="odd" ><td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
<?php echo Yii::t($language,'timelines not exist') ?></blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----><?php
	}
}
else{
 ?>
  <div class=""> 
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<div id="All_TimeTables" style="clear: both">
<h1><?php echo Yii::t($language,'Manage Timelines') ?></h1>
<?php 
  $AllMyDefaultLessonPlanner =  DefaultLessonPlanner::model()->findAll();
if ($AllMyDefaultLessonPlanner){
	
$DefaultLessonPlanner =  DefaultLessonPlanner::model()->findByAttributes(array('status'=>1)); 

if ($DefaultLessonPlanner){
 ?>
 <div id="NewTimeline"></div>
 <div class="da-panel collapsible" id="ActiveTimeline">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                      <?php echo Yii::t($language,'Active Timeline') ?>
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>


<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,'Delete'),  array('DeleteDefault'), array( 'type'=>'POST',
'update'=>"#ActiveTimeline",
'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want delete')." $DefaultLessonPlanner->title"
));	 
 ?></li>  
    <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/message-success.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,"Deactivate"),  array('DeactivateDefaultLessonPlanner'), array( 'type'=>'POST',
'update'=>".grid_3",
 'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want deactivate')." $DefaultLessonPlanner->title"
));	 
 ?></li> 
           <li><a href="Timeline/Update/<?php echo $DefaultLessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>  
       <li>
<?php  /*
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/pencil.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,"Update"),  array('UpdateTimelineCall'), array( 'type'=>'POST',
'update'=>"#ActiveTimeline",
 'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=> Yii::t($language,'are you sure you want Update')."$DefaultLessonPlanner->title"
));	 
 ?></li> 
       <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/arrow_redo.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,"New"),  array('NewTimelineCall'), array( 'type'=>'POST',
'update'=>"#NewTimeline",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
));	 
 */
 ?>
 
 </li>         

        <li><a href="Timeline/Manage/<?php echo $DefaultLessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/table.png"><?php echo Yii::t($language,'Manage') ?></a></li>                                   
 
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="even">
                                            	<th><?php echo Yii::t($language,'Title') ?></th>
                                                <td><?php echo  $DefaultLessonPlanner->title;  ?></td>
                                            </tr>
                                             <tr class="odd">
                                            	<th><?php echo Yii::t($language,'Create Time') ?></th>
                                                <td><?php echo $DefaultLessonPlanner->create_date  ;  ?></td>
                                            </tr>
                	                        <tr class="even">
                                            	<th><?php echo Yii::t($language,'Last Update') ?></th>
                                                <td><?php echo $DefaultLessonPlanner->update_date  ;  ?></td>
                                            </tr>
 
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->


<?php
} // end active table 
else{?><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">
			<?php echo Yii::t($language,'No Active Lesson Planner') ?></blockquote><?php }
$InactiveDefaultlLessonPlanners =  LessonPlanner::model()->findAllBySql("select * from default_lesson_planner where status != 1") ; if (count($InactiveDefaultlLessonPlanners)>0 ) {     ?>
<div class="grid_4" id="grid_4"><div class="da-panel collapsible"  id="InactiveLessonPlanners"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
    <?php echo Yii::t($language,'Inactive Timelines') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"> </th><th><?php echo Yii::t($language,'Activate') ?></th><th style="width:30px "><?php echo Yii::t($language,'Manage') ?></th></tr>
</thead><tbody>
                                            
 <?php  foreach ($InactiveDefaultlLessonPlanners as  $value) {?>
    <tr  id="DefaultLessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">


 <?php 
 echo CHtml::ajaxLink("",  array('DeleteDefaultFromIndex'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m29898',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->title"
));	
 ?>

<?php 
 echo CHtml::ajaxLink("",  array('UpdateDefaultFromIndexCall'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'edit_ex_m9854',
));	
 ?>
    </td>
<td class="da-icon-column" id="column_<?php echo $value->id;?>" style="width:30px;padding: 1px 2px 3px 26px;"><?php
 
 	 echo CHtml::ajaxLink("",  array('ActivateDefaultLessonPlanner'), array( 'type'=>'POST',
'update'=>".grid_3",
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want activate')." $value->title"
));
 
?></td>  

<td class="da-icon-column"  style="width:30px;padding: 1px ;"> 
<a href="Timeline/Manage/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/table.png"></a>
</td>
    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No Inactive Timelines Exist') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>

	

<?php } ?>		                         
</div><!-- All_TimeTables -->


<?php } else {?>	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'timelines not exist') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->
<?php }?>



<!----------------------------------------------------------------------------------->
</div><!---------------------------end grid_3------------------------->
<!----------------------------------------------------------------------------------->


<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php } ?>
</div>



