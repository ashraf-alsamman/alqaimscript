<?php  include 'lang.php';  ?>
<?php   

if ($_GET)
{
$LessonPlannerByGet =  LessonPlanner::model()->findByPk($_GET['id']);
	if($LessonPlannerByGet)
	{
		
		  if ($LessonPlannerByGet->adder_id == Yii::app()->user->id)
		  {
		 	$this->renderPartial('view',array(
	      'lesson_planner_id'=>$LessonPlannerByGet->id )); 	
		  }
		  else
		  {
?><div  class="da-panel-content" ><table class="da-table"><tbody>	<tr class="odd" ><td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
<?php echo Yii::t($language,'you dont have access to manage this lesson planner') ?></blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----> <?php 
}
	
    }

	else {
?><div  class="da-panel-content" ><table class="da-table"><tbody>	<tr class="odd" ><td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000; ">
<?php echo Yii::t($language,'lesson planners not exist') ?></blockquote></td></tr> </div></tbody></table></div><!----da-panel-content----><?php
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
<h1><?php echo Yii::t($language,'Manage Lesson Planners') ?></h1>
<?php 
  $AllMyLessonPlanner =  LessonPlanner::model()->findAllByAttributes(array('adder_id'=> Yii::app()->user->id ));
if ($AllMyLessonPlanner){
	// 'adder_id'=> Yii::app()->user->id ,
 $LessonPlanner =  LessonPlanner::model()->findByAttributes(array(
'status'=>1));
if ($LessonPlanner){
 ?>
<br>
 <div class="da-panel collapsible" id="ActiveLessonPlanner">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                      <?php echo Yii::t($language,'Active Lesson Planner') ?>
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>


<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,'Delete'),  array('DeleteM'), array( 'type'=>'POST',
'update'=>"#ActiveLessonPlanner",
'data'=>array('LessonPlanner_id'=>$LessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want delete')." $LessonPlanner->title"
));	 
 ?></li>  
    <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/message-success.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,"Deactivate"),  array('DeactivateLessonPlanner'), array( 'type'=>'POST',
'update'=>".grid_3",
 'data'=>array('LessonPlanner_id'=>$LessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want deactivate')." $LessonPlanner->title"
));	 
 ?></li> 
    <li><a href="LessonPlanner/Update/<?php echo $LessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>                                   
        <li><a href="LessonPlanner/Manage/<?php echo $LessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/table.png"><?php echo Yii::t($language,'Manage') ?></a></li>                                   
 
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="even">
                                            	<th><?php echo Yii::t($language,'Title') ?></th>
                                                <td><?php echo  $LessonPlanner->title;  ?></td>
                                            </tr>
                                             <tr class="odd">
                                            	<th><?php echo Yii::t($language,'Create Time') ?></th>
                                                <td><?php echo $LessonPlanner->create_time  ;  ?></td>
                                            </tr>
                	                        <tr class="even">
                                            	<th><?php echo Yii::t($language,'Last Update') ?></th>
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
    <?php echo Yii::t($language,'Inactive Lesson Planners') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"></th><th><?php echo Yii::t($language,'Activate') ?></th><th style="width:30px "><?php echo Yii::t($language,'Manage') ?></th></tr>
</thead><tbody>
                                            
 <?php  foreach ($InactiveLessonPlanners as  $value) {?>
    <tr  id="LessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="LessonPlanner/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="LessonPlanner/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php 
 echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('LessonPlanner_id'=>$value->id),
'update'=>"#LessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->title"
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
'confirm'=>Yii::t($language,'are you sure you want activate')." $value->title"
));
 
?></td>  

<td class="da-icon-column"  style="width:30px;padding: 1px ;"> 
<a href="LessonPlanner/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/table.png"></a>
</td>
    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No Inactive Lesson Planners Exist') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>

	

<?php } ?>		                         
</div><!-- All_TimeTables -->


<?php } else {?>	
	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No Lesson Planners Exist') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->
<?php }?>



<!----------------------------------------------------------------------------------->
</div><!---------------------------end grid_3------------------------->

<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------->
<?php } ?>




