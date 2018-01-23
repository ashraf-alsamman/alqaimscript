<?php  include 'lang.php';  ?>
<h1><?php echo Yii::t($language,'Parents') ?></h1>
<?php   $Parents =  Parents::model()->findAll() ; if (count($Parents)>0 ) {     ?>

<div class="grid_4" id="grid_4"><div class="da-panel collapsible"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
<?php echo Yii::t($language,'Details') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Name') ?></th><th><?php echo Yii::t($language,'Gender') ?></th><th class="Null" style=" background-image: url("images/4444545.png");"></th></tr>
</thead><tbody>
                                            
 <?php 
    foreach ($Parents as  $value) {?>

    <tr  id="parent_id_<?php echo $value->id;?>" >
        <td><?php echo $value->name ; ?></td>
        <td><?php if ( $value->sex == 1){echo  Yii::t($language,"Male");} else {echo  Yii::t($language,"Female");}   ?></td>
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="Parents/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="Parents/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('parent_id'=>$value->id),
'update'=>"#parent_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>Yii::t($language,'are you sure you want delete')." $value->name"
));	
 ?>
    </td></tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
	 	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 ">No parent Exist</blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>
	
<?php } ?>
 
</div><!-- search-form -->
 