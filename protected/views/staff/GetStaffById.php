<?php
    $Users =  Users::model()->findByPk(Yii::app()->user->id) ;
 if ($Users)
 {
 	Yii::app()->setLanguage($Users->lang);
 }
$language =Yii::app()->language;
?>
<script>
$(document).ready(function(){
 
 var id_T =<?php echo $job_title_id;?> ;
     $("#active_job_title"+id_T).show("slow");
$("#job_title_header_id"+id_T).click(function () {
$("#active_job_title"+id_T).slideToggle("slow");
});
}); 
</script>

<h3 id ="job_title_header_id<?php echo $job_title_id;?>" class="ui-accordion-header ui-helper-reset ui-state-default ui-state-active ui-corner-top" 
style="background-color: #e5e5e5"
role="tab" aria-expanded="true" aria-selected="true" tabindex="0">
<span class="ui-icon ui-icon-triangle-1-s"></span><a tabindex="-1"><span style="font-size:14px"><?php echo $job_title;?></span><span class="note_m">loaded</span></a></h3>
<div  style="padding: 0;"  id ="active_job_title<?php echo $job_title_id;?>" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" role="tabpanel">

<?php 
$data2 = Staff::model()->findAllByAttributes(array('job_title'=>$job_title_id),array('order'=>'id DESC')) ;   
 if (count($data2)>0){?>
 	<div  class="da-panel-content" ><table class="da-table"><thead><tr>
<th><?php echo Yii::t($language,'Photo') ?></th><th><?php echo Yii::t($language,'Name') ?></th><th><?php echo Yii::t($language,'Status') ?></th><th  style="width:100px" ><?php echo Yii::t($language,'Appointment date') ?></th><th><?php echo Yii::t($language,'Gender') ?></th><th></th>
</tr></thead><tbody>
<?php foreach ($data2 as  $value2) {  ?>
 
<tr class="odd" id="stuff_id_<?php echo $value2->id; ?>">
	<td style="padding:4px;width:110px;" >
	 
		<?php 
		$photo = Photo::model()->findByAttributes(array('controller_title_ex'=>Yii::app()->controller->id,'r_id'=> $value2->id ) ,array('order'=>'id DESC')) ;    
		if ($photo )
		{
		echo '<img src="'.'/dashboard/uploads/'.$photo->title.'" alt="" class="th_image_m" />';
		}
		
		else {?><img src="<?php echo Yii::app()->baseUrl;?>/images/no_photo.jpg" alt=""  class="th_image_m" /><?php } 
		?> 
	</td>
<td>
<span><?php  echo CHtml::link(CHtml::encode($value2->name), array('Staff/'. $value2->id));?></span>
</td>
<td>
<?php if($value2->active==1) {echo  Yii::t($language,'Active');}else { echo Yii::t($language,'Not active');}?> 
</td>
<td>
<?php if($value2->appointment_date) {echo  $value2->appointment_date;}else {echo  Yii::t($language,'Not set');}?> 
</td>  
<td>
<?php if($value2->sex==1) {  echo Yii::t($language,'Male');}else { echo Yii::t($language,'Female')  ;}?> 
</td>
   
    <td class="da-icon-column" style="width:78px;padding: 1px 2px 3px 26px;">
    	<a href="<?php echo $value2->id ;?>"><img src="/dashboard/images/icons/color/magnifier.png"></a>
    	<a href="Update/<?php echo $value2->id ;?>"><img src="/dashboard/images/icons/color/pencil.png"></a>
 <?php echo CHtml::ajaxLink("",  array('DeleteFromIndex'), array( 'type'=>'POST',
'data'=>array('staff_id'=>$value2->id,'job_title_id'=>$job_title_id,'job_title'=>$job_title),
'update'=>"#stuff_id_$value2->id",
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),
'class' => 'delete_ex_m2',
'confirm'=>"are you sure you want delete $value2->name"
));	
 ?>
    </td>
</tr>


<?php } ?></tbody></table></div><!----da-panel-content---->
	

	
 
	 
	 
	
	

<?php  } else {?><tr class="odd" >
<td style="padding: 0"><blockquote style="border-left: 4px solid #FF0000;background-color:#ffcdcd;color:#FF0000 "><?php echo Yii::t($language,'No Data') ?></blockquote></td>
</tr><?php }?>
</div>
