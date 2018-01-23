<?php
/* @var $this ParentsController */
/* @var $model Parents */
/* @var $form CActiveForm */
?><?php
/* @var $this ParentsController */
/* @var $model Parents */
/* @var $form CActiveForm */
?><?php  include 'lang.php';  ?>
<p class="note"><?php echo Yii::t($language,'Fields with') ?> <span class="required">*</span><?php echo Yii::t($language,'are required.') ?></p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png"><?php echo Yii::t($language,'Details') ?></span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classes-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>
<div class="da-form-inline">


    <div class="da-form-row">    
        <?php echo $form->error($model,'title'); ?>
 
       <label class="required" for="JobTitle_title"><?php echo Yii::t($language,'Title')?> <span class="required">*</span></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'write title') ?></span>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>

<div class="da-form-row"> <?php echo $form->error($model,'grade_id'); ?> <label class="required" for="JobTitle_title"><?php echo Yii::t($language,'Grade')?> <span class="required">*</span></label><div class="da-form-item large">
 <span class="formNote"><?php echo Yii::t($language,'Select Grade')?></span>
	<?php 	
	 
	$Grades =	Grades::model()->findAll(array('order' => 'id'),'id','title');
	 echo CHtml::dropdownList('Classes[grade_id]','id',CHtml::listData($Grades, 'id', 'title' ),   
array(
 'options' => array($model->grade_id=>array('selected'=>true)),
'empty' => Yii::t($language,'Select Grade'),
'onChange'=>CHtml::ajax(array('url' => CController::createUrl('ChangeClasses'), 'type' => 'POST','replace'=>"#ChangeClasses",                              
'data'=>array('grade_id'=>'js:$(this).val()'), )),                          
'class'=>'subject green_select')  ) ;
 

	?>	
 
 <?php // echo $form->dropDownList($model,'grade', CHtml::listData(Grades::model()->findAll(array('order' => 'id')),'id','title'));?>
		<?php echo $form->error($model,'grade'); ?>
	</div></div>
 


<div class="da-form-row">
	<?php echo $form->error($model,'about'); ?>
	<label for="JobTitle_about"><?php echo Yii::t($language,'About') ?></label>
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