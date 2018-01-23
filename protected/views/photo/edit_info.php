<div class="form">

<?php 
echo 


$form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	       'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true,
     ),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php // echo $form->errorSummary('Photo'); ?>
 
	<div class="row">
		<?php echo  "photo information.<br>"; ?>
		
		<textarea rows="6" cols="50" name="Photo[info_cg]"><?php echo$image_id ?></textarea>
		
		
		<?php //  echo $form->error('Photo','info_cg'); ?>
	</div>

 

	<div class="row buttons" >
<?php
echo CHtml::ajaxLink("edit",  array('EditInfo'), array(
		        'type'=>'POST',
		
		'data'=>array(
		           'image_id'=>"$image_id",
		        ),
		'update'=>"#info",
'live' =>'false'
		)
		  
		        ,array('id' => 'send-link3-'.uniqid())         );    			
		// ajax link end 
 
?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->