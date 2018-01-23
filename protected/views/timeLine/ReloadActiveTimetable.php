<?php   
$DefaultLessonPlanner = DefaultLessonPlanner::model()->findByPk($DefaultLessonPlanner_id) ; 
 ?>
<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                      Active Timeline
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>


<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img."Delete",  array('DeleteDefault'), array( 'type'=>'POST',
'update'=>"#ActiveTimeline",
'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want delete $DefaultLessonPlanner->title"
));	 
 ?></li>  
    <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/message-success.png\"/>";
 echo CHtml::ajaxLink($img."Deactivate",  array('DeactivateDefaultLessonPlannerById'), array( 'type'=>'POST',
'update'=>".container",
 'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want deactivate $DefaultLessonPlanner->title"
));	 
 ?></li> 
       <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/pencil.png\"/>";
 echo CHtml::ajaxLink($img."Update",  array('UpdateTimelineCall'), array( 'type'=>'POST',
'update'=>"#ActiveTimeline",
 'data'=>array('DefaultLessonPlanner_id'=>$DefaultLessonPlanner->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>"are you sure you want Update $DefaultLessonPlanner->title"
));	 
 ?></li> 
     
    
    
    <li><a href="../LessonPlanner/<?php echo $DefaultLessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/magnifier.png">View</a></li>
        <li><a href="Manage/<?php echo $DefaultLessonPlanner->id; ?>"><img alt="" src="/dashboard/images/icons/color/table.png">Manage</a></li>                                   
 
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr class="even">
                                            	<th>Title</th>
                                                <td><?php echo  $DefaultLessonPlanner->title;  ?></td>
                                            </tr>
                                             <tr class="odd">
                                            	<th>Create Time</th>
                                                <td><?php echo $DefaultLessonPlanner->create_date  ;  ?></td>
                                            </tr>
                	                        <tr class="even">
                                            	<th>Last Update</th>
                                                <td><?php echo $DefaultLessonPlanner->update_date  ;  ?></td>
                                            </tr>
 
                                       
                                        </tbody>
                                    </table>
                                </div>