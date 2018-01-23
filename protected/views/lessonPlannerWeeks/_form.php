<?php
/* @var $this LessonPlannerWeeksController */
/* @var $model LessonPlannerWeeks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-planner-weeks-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<br><br><br><br><br><br><br><br>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>


	<div class="row">
		<?php /* echo $form->labelEx($model,'update_date');  
		 echo $form->textField($model,'update_date',array('size'=>45,'maxlength'=>45)); 
         echo $form->error($model,'update_date'); */?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'from_date_ex'); ?>
		<?php 
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name'=>'from_date_ex',
        'attribute'=>'from_date_ex',
        'model'=>$model,
        //'controller'=>$controller,
        // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
    ),
    'htmlOptions'=>array(
       'style'=>'height:20px;','name'=>'tgl_mulai',
    ),
));
		 ?>
		<?php echo $form->error($model,'from_date_ex'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'to_date_ex'); ?>
		<?php 
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name'=>'to_date_ex',
        'attribute'=>'to_date_ex',
        'model'=>$model,
        //'controller'=>$controller,
        // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
    ),
    'htmlOptions'=>array(
       'style'=>'height:20px;','name'=>'tgl_mulai',
    ),
));
  echo $form->error($model,'to_date_ex'); ?>
	</div>

<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->