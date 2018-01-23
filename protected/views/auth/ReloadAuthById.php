 <div id="DeleteSubjects">
<?php
 

?>
<div class="da-form-item large" style=" margin-left: 0px;">
<span class="formNote"> </span>              	 	 
<div class="da-panel collapsible"><div class="da-panel-header">                       	
<span class="da-panel-title"><img alt="" src="/dashboard/images/icons/black/16/list.png"><?php // echo $key->title; ?></span>                                                           
<span class="da-panel-toggler"></span></div>

<div class="da-panel-content"><table class="da-table">
<thead><tr><th>Auth title</th><th>Pages</th><th style=" text-align:center;">Delete</th></tr></thead>
<tbody>
	
	<!---forech start--->
	<?php 
 
	
	     $ExAuthRel = ExAuthRel::model()->findAllBySql("
select * from ex_auth_rel where job_title_id = $job_title_id GROUP BY controller_id
	     ");
	
	if (count($ExAuthRel)>0) 
	{

		foreach ($ExAuthRel as $Rel) 
		{
	
	
	
		?><tr id ="PageCategory_<?php echo $Rel->controller_id.$job_title_id;?>">

<td><?php 
 echo   ExAuthController::model()->findByAttributes(array('id'=>$Rel->controller_id))->title ; 
?></td>               

				<!-----pages start---->

		<td><?php
$Pages = ExAuthRel::model()->findAllByAttributes(array( 
'controller_id'=>$Rel->controller_id,'job_title_id'=>$job_title_id
),array('order'=>'id DESC')) ; 	

if (count($Pages)>0)
{
	foreach ($Pages as $Page) 
	{
		if($ExAuthAction= ExAuthAction::model()->findByAttributes(array('id'=>$Page->action_id))) 
		{
	?><div id="page_id_<?php echo $Page->id;?>" class="page_id"><?php
	?><span style="float:left;margin-right: 15px;"><?php	 	echo $ExAuthAction->action_title;?></span><?php
			echo CHtml::ajaxLink("",  array('DeletePage'), array( 'type'=>'POST',
	 'data'=>array('page_id'=>$Page->id,'job_title_id'=>$job_title_id,'PageCategory'=>$Rel->controller_id),'replace'=>"#page_id_$Page->id",'live' =>'false'),array('id' => 'send-link-'.uniqid(),
	'class' => 'DeletePage'));
	?></div><?php
		}
	}
}
 
		
		?></td>
		<!-----pages end---->
		<td class="da-icon-column" style="width: 40px">          	
	<?php echo CHtml::ajaxLink("",  array('DeleteAllPagesById'), array( 'type'=>'POST',
	 'data'=>array('job_title_id'=>$job_title_id,'PageCategory'=>$Rel->controller_id),'update'=>"#PageCategory_$Rel->controller_id",'live' =>'false'),array('id' => 'send-link-'.uniqid(),
	'class' => 'DeleteAllPageById','confirm'=>"are you sure"));
	 ?>
		</td>	

		
		
		
		
		
		
		</tr>
	<?php	}
	
	}
	
	?>

    <!---forech end--->
   
  </tbody></table><form class="da-form">
<div id ="ManageAuth_<?php echo  $job_title_id ; ?>" class="da-form-row">
 	
 	<?php   

 echo CHtml::ajaxLink("Add Auth",  array('AddAuthCall'), 
 array( 'type'=>'POST','data'=>array(
	 'job_title_id'=>$job_title_id),'update'=>"#ManageAuth_$job_title_id", 'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button blue' )); 
?></div><!--ManageAuth-->
</form>




</div></div>
</div><!---da-form-item--->
     
      