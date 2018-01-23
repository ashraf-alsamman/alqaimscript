<?php $b_bath = '/dashboard/' ; ?>
<!-- DataTables Plugin -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.tables.js"></script>


<?php 
$value = DefaultLessonPlanner::model()->findByPk($DefaultLessonPlanner_id) ; 
 ?>
        
          <tr  id="DefaultLessonPlanner_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="TimeTable/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="TimeTable/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php 
 echo CHtml::ajaxLink("55",  array('UpdateDefaultFromIndexCall'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => '',
'confirm'=>"are you sure you want delete $value->title"
));	
 ?>
 <?php 
 echo CHtml::ajaxLink("",  array('DeleteDefaultFromIndex'), array( 'type'=>'POST',
'data'=>array('DefaultLessonPlanner_id'=>$value->id),
'update'=>"#DefaultLessonPlanner_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>"are you sure you want delete $value->title"
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
'confirm'=>"are you sure you want activate $value->title"
));
 
?></td>  

<td class="da-icon-column"  style="width:30px;padding: 1px ;"> 
<a href="Manage/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/table.png"></a>
</td>
    
    </tr>