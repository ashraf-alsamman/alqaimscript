
<?php   

if ($_GET)
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
you dont have access to manage this lesson planner</blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----> <?php 
}
	
    }

	else {
?><div  class="da-panel-content" ><table class="da-table"><tbody>	<tr class="odd" ><td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
lesson planner not exist</blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----><?php
	}
}
else{
 ?>
  <div class="grid_3"> 
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<div id="All_TimeTables" style="clear: both">
<h1>Manage Lesson Planners</h1>
<?php 
  $AllMyLessonPlanner =  LessonPlanner::model()->findAllByAttributes(array('adder_id'=> Yii::app()->user->id ));
if ($AllMyLessonPlanner){
	
 $LessonPlanner =  LessonPlanner::model()->findByAttributes(array('adder_id'=> Yii::app()->user->id 
,'status'=>1));
if ($LessonPlanner){
 ?>
<br>
 <div class="da-panel collapsible" id="ActiveLessonPlanner">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                      Active Lesson Planner
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>


<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img."Delete",  array('DeleteM'), array( 'type'=>'POST',
'update'=>"#ActiveLessonPlanner",
'data'=>array('LessonPlanner_id'=>$LessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want delete $LessonPlanner->title"
));	 
 ?></li>  
    <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/message-success.png\"/>";
 echo CHtml::ajaxLink($img."Deactivate",  array('DeactivateLessonPlanner'), array( 'type'=>'POST',
'update'=>".grid_3",
 'data'=>array('LessonPlanner_id'=>$LessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want deactivate $LessonPlanner->title"
));	 
 ?></li> 
    <li><a href="../LessonPlanner/Update/<?php echo $LessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png">Update</a></li>                                   
    <li><a href="../LessonPlanner/Create"><img alt="" src="/dashboard/images/icons/color/arrow_redo.png">Renew</a></li>
    <li><a href="../LessonPlanner/<?php echo $LessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/magnifier.png">View</a></li>
        <li><a href="Manage/<?php echo $LessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/table.png">Manage</a></li>                                   
 
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="even">
                                            	<th>Title</th>
                                                <td><?php echo  $LessonPlanner->title;  ?></td>
                                            </tr>
                                             <tr class="odd">
                                            	<th>Create Time</th>
                                                <td><?php echo $LessonPlanner->create_time  ;  ?></td>
                                            </tr>
                	                        <tr class="even">
                                            	<th>Last Update</th>
                                                <td><?php echo $LessonPlanner->update_time  ;  ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->


<?php
} // end active table 
else{$this->renderPartial('NoActiveLessonPlanner2',array());}
$InactiveLessonPlanners =  LessonPlanner::model()->findAllBySql("select * from lesson_planner where status != 1") ; if (count($InactiveLessonPlanners)>0 ) {     ?>
<div class="grid_4" id="grid_4"><div class="da-panel collapsible"  id="InactiveLessonPlanners"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
    Inactive Lesson Planners</span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th>Title</th><th class="Null" style=" background-image: url("images/4444545.png");">Manage</th><th>Activate</th><th style="width:30px ">Manage</th></tr>
</thead><tbody>
                                            
 <?php  foreach ($InactiveLessonPlanners as  $value) {?>
    <tr  id="LessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="TimeTable/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="TimeTable/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php 
 echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('LessonPlanner_id'=>$value->id),
'update'=>"#LessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>"are you sure you want delete $value->title"
));	
 ?>
    </td>
<td class="da-icon-column" id="column_<?php echo $value->id;?>" style="width:30px;padding: 1px 2px 3px 26px;"><?php
 
 	 echo CHtml::ajaxLink("",  array('ActivateLessonPlanner'), array( 'type'=>'POST',
'update'=>".grid_3",
'data'=>array('LessonPlanner_id'=>$value->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>"are you sure you want activate $value->title"
));
 
?></td>  

<td class="da-icon-column"  style="width:30px;padding: 1px ;"> 
<a href="Manage/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/table.png"></a>
</td>
    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No Inactive Lesson Planners Exist</blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>

	

<?php } ?>		                         
</div><!-- All_TimeTables -->


<?php } else {?>	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No Lesson Planners Exist</blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->
<?php }?>



<!----------------------------------------------------------------------------------->
</div><!---------------------------end grid_3------------------------->
<!----------------------------------------------------------------------------------->

<div class="grid_1" style="position: fixed;top: 110px;right: 0px;width: 20%;">
                        	<div class="da-panel-widget">
                                <h1>Summary</h1>
                                <ul class="da-summary-stat">
                                	<li>
                                    	<a href="../LessonPlanner">
                                            <span style="background-color:#a6d037;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">`</span>
                                                <span class="label">Manage Active</span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="../LessonPlanner/create">
                                            <span style="background-color:#61a5e4;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">`</span>
                                                <span class="label">New Lesson Planner</span>
                                            </span>
                                        </a>
                                    </li>
                                   
                                   <li>
                                    	<a href="#">
                                            <span style="background-color:#ea799b;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">286</span>                                        
                                                <span class="label">Manage Timeline</span>
	                                        </span>
                                        </a>
                                    </li>
                                	                                   

                                    <li>
                                        <a href="#">
                                            <span style="background-color:#fab241;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value down">61</span>
                                                <span class="label">New Timeline</span>
                                            </span>
                                        </a>
                                    </li>
                                	<li>
                                    	<a href="#">
                                            <span style="background-color:#e15656;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">211</span>
                                                <span class="label">Packages Distributed</span>
                                            </span>
                                        </a>
                                    </li>



                                    <li>
                                    	<a href="#">
                                            <span style="background-color:#656565;" class="da-summary-icon">
                                                <img alt="" src="/dashboard/images/icons/white/32/cog_2.png">
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">266</span>
                                                <span class="label">Customers Satisfied</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php } ?>




