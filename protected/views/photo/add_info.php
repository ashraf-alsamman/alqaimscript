<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'photo-form',
	       'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true,
     ),

)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
 
	<div class="row">
		<?php echo  "photo information.<br>"; ?>
		<?php echo $form->textArea($model,'info_cg',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'info_cg'); ?>
	</div>

 

	<div class="row buttons" style ="display:none">
<?php
echo CHtml::ajaxSubmitButton(
'Add',
array('AddInfo'),
array(
'update'=>'#info',
),
array(
'type'=>'submit',
)
);
?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->