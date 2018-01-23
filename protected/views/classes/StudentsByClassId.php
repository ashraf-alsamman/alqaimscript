<?php  include 'lang.php';  ?>
<?php   $Students =  Students::model()->findAllByAttributes(array('class_m'=>$class_id)) ; if (count($Students)>0 ) {     ?>
<div class="grid_4" id="grid_4"><div class="da-panel collapsible"><div class="da-panel-header">
<span class="da-panel-title"><img src="/dashboard/images/icons/black/16/list.png" alt="" />
  <?php echo Yii::t($language,'Students') ?></span></div><div class="da-panel-content"><table id="da-ex-datatable-numberpaging" class="da-table">
<thead><tr><th><?php echo Yii::t($language,'Photo') ?></th><th><?php echo Yii::t($language,'Name') ?></th><th><?php echo Yii::t($language,'Birth Date') ?></th><th><?php echo Yii::t($language,'Nationality') ?></th><th><?php echo Yii::t($language,'Gender') ?></th><th  style="     width: 20px; "></th></tr>
</thead><tbody>
 <?php   
    foreach ($Students as  $value) {?>
    <tr  id="student_id_<?php echo $value->id;?>" >
        
        
        
     <td style="padding:4px;width:110px;" ><?php
	 $photo = Photo::model()->findByAttributes(array('controller_title_ex'=>Yii::app()->controller->id,'r_id'=> $value->id ) ,array('order'=>'id DESC')) ;    
		if ($photo )
		{
		echo '<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" class="th_image_m" />';
		}
		
		else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt=""  class="th_image_m" /><?php } 
		?> 
	</td>
        
        
        
        
        
        
        
        
        
        <td><?php echo $value->name ; ?></td>
        <th><?php echo $value->birth_date ; ?></th><th><?php if ($value->nationality){echo Countries::model()->findByPk($value->nationality)->title; } ;  ?></th>
        <td><?php if ( $value->sex == 1){echo Yii::t($language,"Male");} else {echo Yii::t($language,"Female");}   ?></td>
    <td class="da-icon-column" style="padding: 1px 2px 3px 12px; width: 100px;">
    	
 <?php echo CHtml::ajaxLink("",  array('RemoveFromClass'), array( 'type'=>'POST',
'data'=>array('student_id'=>$value->id,'class_id'=>$class_id),
'update'=>"#student_id_$value->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'style' =>'
    background: url("/dashboard/images/icons/color/arrow_undo.png") no-repeat scroll 0 0 transparent;
    height: 16px; margin: 1px 8px 0 2px;width: 16px;float:left;padding:0;display:block;',
'confirm'=>"are you sure you want $value->name out  from class"
)); ?>	
   	<a   
    	style="   margin: 0px 8px ; padding: 0px; float: left;  width:16px;height:16px;  "          href="../Students/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a   
    	style="  margin: 0px 8px ; padding: 0px;float: left;    width:16px;height:16px;  "   href="../Students/Update/<?php echo $value->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>

    </td></tr><?php } ?>  
    
                                         
</tbody> </table></div></div></div>
                                            
        <?php }   
else{?>
	 	<div  class="da-panel-content" ><table class="da-table"><tbody>
<tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No students in this class') ?></blockquote></td>
</tr>
 </tbody></table></div><!----da-panel-content---->

</div>
	
<?php } ?>
		    