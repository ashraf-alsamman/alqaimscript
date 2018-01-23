
<?php  include 'lang.php';  ?>
<h1><?php echo Yii::t($language,'Job Titles') ?></h1><h3><?php echo Yii::t($language,'Admin and Teachers Can not be Deleted') ?></h3>


<?php   $data =  JobTitle::model()->findAllBySql("select * from job_title where id != 1 AND id != 2 AND id != 3  AND id != 4") ; if (count($data)>0 ) {     ?>

<div class="grid_4" id="grid_4"><div class="da-panel collapsible"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
<?php echo Yii::t($language,'Job Titles') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Title') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"></th></tr>
</thead><tbody>
                                            
 <?php   
    foreach ($data as  $value) {?>

    <tr  id="attr_id_<?php echo $value->id;?>" >
        <td><?php echo $value->title ; ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('id'=>$value->id),
'update'=>"#attr_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want delete')."$value->title"
));	
 ?>
    </td></tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
	 	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No Subjects Exist</blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>
	
<?php } ?>


















