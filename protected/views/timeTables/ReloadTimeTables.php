  <?php  include 'lang.php';  ?>
 <?php $b_bath = '/dashboard/' ; ?>
<!-- DataTables Plugin -->
<?php  if ($language=='ar'){  ?>
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min_ar.js"></script>
<?php }else{ ?>
<script type="text/javascript" src="<?php echo $b_bath ; ?>plugins/datatables/jquery.dataTables.min.js"></script>
<?php }   ?>
<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo $b_bath ; ?>js/demo/demo.tables.js"></script>

 
<div id="All_TimeTables" style="clear: both">
<h1><?php echo Yii::t($language,'Time Tables') ?></h1>
<?php $TimeTable = TimeTables::model()->findByAttributes(array('status'=>1)) ;
if ($TimeTable){
 ?>
<br>
 <div class="da-panel collapsible" id="ActiveTimeTable">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/color/blog.png">
                                      
                     <?php echo Yii::t($language,'Active Time Table') ?>
                                    </span>
                                    
                                <span class="da-panel-toggler"></span></div>
                                <div class="da-panel-toolbar top">
                                    <ul>


<li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/icons/color/cross.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,'Delete'),  array('DeleteM'), array( 'type'=>'POST',
'update'=>"#ActiveTimeTable",
'data'=>array('TimeTable_id'=>$TimeTable->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want delete')." $TimeTable->title"
));	 
 ?></li>  
    <li>
<?php
 $img = "<img class=\"hide\" src=\"/dashboard/images/message-success.png\"/>";
 echo CHtml::ajaxLink($img.Yii::t($language,"Deactivate"),  array('DeactivateTimeTable'), array( 'type'=>'POST',
'update'=>".grid_3",
 'data'=>array('TimeTable_id'=>$TimeTable->id,'TimeTable_title'=>$TimeTable->title),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m3',
'confirm'=>Yii::t($language,'are you sure you want deactivate')." $TimeTable->title"
));	 
 ?></li> 
    <li><a href="TimeTables/Update/<?php echo $TimeTable->id; ?>"><img alt="" src="/dashboard/images/icons/color/pencil.png"><?php echo Yii::t($language,'Update') ?></a></li>                                   
    <li><a href="TimeTable/Update/<?php echo $TimeTable->id; ?>"><img alt="" src="/dashboard/images/icons/color/table.png"><?php echo Yii::t($language,'Manage') ?></a></li>                                   
 
                                    <!----   <li><a href="#"><img alt="" src="/dashboard/images/icons/color/coins.png">Withdraw</a></li>---> 
                                    </ul>
                                </div>      
                                <div class="da-panel-content">
                                    <table class="da-table da-detail-view">
                                        <tbody>
                                        	<tr >
                                            	<th><?php echo Yii::t($language,'Title') ?></th>
                                                <td><?php echo  $TimeTable->title;  ?></td>
                                            </tr>

                                            <tr >
                                            	<th><?php echo Yii::t($language,'Number of lessons') ?></th>
                                                <td><?php echo $TimeTable->lesson_num  ;  ?></td>
                                            </tr>
                	                        
                	                        <tr >                                         
                                            <th><?php echo Yii::t($language,'Days') ?></th>
                                                <td><?php
                                                 $days = Days::model()->findAllByAttributes(array('time_table_id'=>$TimeTable->id,'status'=>'on'));
                                                if (count($days)>0):
                                                foreach ($days as $day)
                                               { echo Yii::t($language,$day->title).' ' ; } endif;
                                               ?></td>
                                            </tr>                                          <tr >
                                            	<th><?php echo Yii::t($language,'Create Time') ?></th>
                                                <td><?php echo $TimeTable->create_time  ;  ?></td>
                                            </tr>
                	                        <tr >
                                            	<th><?php echo Yii::t($language,'Last Update') ?></th>
                                                <td><?php echo $TimeTable->last_update  ;  ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!---details table--->


<?php
} // end active table 
else{$this->renderPartial('NoActiveTimeTable',array());}
$TimeTables =  TimeTables::model()->findAllBySql("select * from time_tables   where status = 0") ; if (count($TimeTables)>0 ) {     ?>
<div class="grid_4" id="grid_4"><div class="da-panel collapsible"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
    <?php echo Yii::t($language,'Inactive Time Tables') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"></th><th><?php echo Yii::t($language,'Activate') ?></th><th style="width:30px "><?php echo Yii::t($language,'Manage') ?></th></tr>
</thead><tbody>
                                            
 <?php  foreach ($TimeTables as  $value) {?>
    <tr  id="TimeTable_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="TimeTables/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php 
 echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('TimeTable_id'=>$value->id),
'update'=>"#TimeTable_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->title"
));	
 ?>
    </td>
<td class="da-icon-column" id="column_<?php echo $value->id;?>" style="width:30px;padding: 1px 2px 3px 26px;"><?php
 
 	 echo CHtml::ajaxLink("",  array('ActivateTimeTable'), array( 'type'=>'POST',
'update'=>".grid_3",
'data'=>array('TimeTable_id'=>$value->id),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'activate_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want activate')." $value->title"
));
 
?></td>  

<td class="da-icon-column"  style="width:30px;padding: 1px ;"> 
<a href="TimeTable/update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/table.png"></a>
</td>
    
    </tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
	 	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No TimeTables Exist</blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>

	

<?php } ?>		                         
</div><!-- All_TimeTables -->





