 <?php  include 'lang.php';  ?>
<p class="note"><?php echo Yii::t($language,'Fields with') ?> <span class="required">*</span><?php echo Yii::t($language,'are required.') ?></p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png"><?php echo Yii::t($language,'Details') ?></span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>
<div class="da-form-inline">

	<?php echo $form->errorSummary($model); ?>

    <div class="da-form-row">    
        <?php echo $form->error($model,'name'); ?>
 
       <label class="required" for="Students_name" style="float: right"><?php echo Yii::t($language,'Name')?> <span class="required">*</span></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'write name') ?></span>
            <?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>


 
 
     
 
 
 
 
 
    <div class="da-form-row">    
        <?php echo $form->error($model,'grade'); ?>
        <label for="Students_grade"><?php echo Yii::t($language,'Grade') ?></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'Select grade') ?></span><?php 
	$Grades =	Grades::model()->findAll(array('order' => 'id'),'id','title');
	 echo CHtml::dropdownList('Students[grade]','id',CHtml::listData($Grades, 'id', 'title' ),   
array(
 'options' => array($model->grade=>array('selected'=>true)),
'empty' => Yii::t($language,'Select grade'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeClasses'), 'type' => 'POST','update'=>"#ChangeClasses",                              
'data'=>array('grade_id'=>'js:$(this).val()'), )),                          
'class'=>'subject green_select')  ) ;
 

	?>	
 
 <?php // echo $form->dropDownList($model,'grade', CHtml::listData(Grades::model()->findAll(array('order' => 'id')),'id','title'));?>
		<?php echo $form->error($model,'grade'); ?>
	
	</div>
	<div  id ="ChangeClasses" >
	 
	<?php 	 
	 $data = ClassesM::model()->findAllByAttributes(array('grade_id'=>$model->grade));
	 
	 if (count($data)>0):
	 ?>
	 	<div class="da-form-row" id ="ChangeClasses" style="padding-left: 1px"><label >Class</label>
 <div class="da-form-item large">
<span class="formNote">Choose class</span>
	 <?php
	 	 echo CHtml::dropdownList('Students[class_m]','id',CHtml::listData($data, 'id', 'title' ),   
array(
 'options' => array($model->class_m=>array('selected'=>true)),
'empty' => 'Select class',
                          
'class'=>'subject green_select')  ) ;
	 	?></div></div><?php
	
	 endif;

	?>	
	</div>
	</div>

       <div class="da-form-row">
	    <?php echo $form->error($model,'nationality'); ?>
	   <label for="Staff_nationality"><?php echo Yii::t($language,'Nationality') ?></label>
	    <div class="da-form-item default">
	    	<span class="formNote"><?php echo Yii::t($language,'choose nationality') ?></span>
 <?php 
 if($model->isNewRecord)
 {
 	 echo $form->dropDownList($model,'nationality',
 	  CHtml::listData(Countries::model()->findAll(array('order' => 'printable_name')),'id',
 	  'printable_name'),array(
'options' => array(180=>array('selected'=>true)),));
	
 }
 else{
 echo $form->dropDownList($model,'nationality', CHtml::listData(Countries::model()->findAll(array('order' => 'printable_name')),'id','printable_name'));
}
?>
	    </div>
	   </div> 
   
   
    <div class="da-form-row">
	    <?php echo $form->error($model,'active'); ?>
	    <label for="Staff_active"><?php echo Yii::t($language,'Status') ?></label>
	    <div class="da-form-item small">
	    	<span class="formNote"><?php echo Yii::t($language,'choose status') ?></span>
		<?php echo $form->dropDownList($model, 'active', array(1=>Yii::t($language,'Active') , 2=>Yii::t($language,'Inactive') ));?>

	    </div>
	</div> 

    <div class="da-form-row">
	    <?php echo $form->error($model,'sex'); ?>
	    <label for="Staff_sex"><?php echo Yii::t($language,'Gender') ?></label>
	    <div class="da-form-item small">
	    	<span class="formNote"><?php echo Yii::t($language,'choose gender') ?></span>
		<?php echo $form->dropDownList($model, 'sex', array(1=>Yii::t($language,'Male'), 2=>Yii::t($language,'Female')));?>

	    </div>
	</div> 


	
<div class="da-form-row">
	<?php echo $form->error($model,'birth_date'); ?>
	<label for="Staff_birth_date"><?php echo Yii::t($language,'Birth Date') ?></label>
	<div class="da-form-item small">
	<span class="formNote"><?php echo Yii::t($language,'Pick birth date') ?></span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'birth_date',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
	</div>
</div>

	
<div class="da-form-row">
	<?php echo $form->error($model,'start_date'); ?>
	<label for="Staff_start_date"><?php echo Yii::t($language,'Start Date') ?></label>
	<div class="da-form-item small">
	<span class="formNote"><?php echo Yii::t($language,'pick start date') ?></span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'start_date',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
	</div>
</div>
 
<div class="da-form-row">
	<?php echo $form->error($model,'appointment_date'); ?>
	<label for="Staff_appointment_date"><?php echo Yii::t($language,'Appointment Date') ?></label>
	<div class="da-form-item small">
	<span class="formNote"><?php echo Yii::t($language,'pick appointment date') ?></span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'appointment_date',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
	</div>
</div>

<div class="da-form-row">
	<?php echo $form->error($model,'about'); ?>
	<label for="Staff_about"><?php echo Yii::t($language,'About') ?></label>
	<div class="da-form-item">
	<span class="formNote"><?php echo Yii::t($language,'write summary') ?></span>
	<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
	</div>
</div>

<div class="da-button-row" style="float: left">
    	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t($language,'C r e a t e')   : Yii::t($language,'S a v e'),array('class' => 'da-button green large')); ?>
</div>
<?php $this->endWidget(); ?>

                                        </div>
                                    </form>
                                </div>
                            </div>

</div><!-- form -->