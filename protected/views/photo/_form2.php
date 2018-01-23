<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	       'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true,
     ),

)); ?>

	<p class="note">from ajaaax</p>

	<?php // echo $form->errorSummary('Photo'); ?>
 
	<div class="row">
		<?php echo  "photo information.<br>"; ?>
		
		<textarea rows="6" cols="50" name="Photo[info_cg]"></textarea>
		
		
		<?php //  echo $form->error('Photo','info_cg'); ?>
	</div>

 

	<div class="row buttons" >
<?php
echo CHtml::ajaxSubmitButton(
'search object',
array('AddInfo_first_time'),
array(
'update'=>'#info','live' =>'false'
),
array(
'type'=>'submit',
)
, array('id' => uniqid())
);
?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->