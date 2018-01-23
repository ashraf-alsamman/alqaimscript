
<?php  include 'lang.php';  ?>
<p class="note"><?php echo Yii::t($language,'Fields with') ?> <span class="required">*</span><?php echo Yii::t($language,'are required.') ?></p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png"><?php echo Yii::t($language,'Details') ?></span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'default-lesson-planner-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>
<div class="da-form-inline">

<?php echo $form->errorSummary($model); ?>
    <div class="da-form-row">    
        <?php echo $form->error($model,'title'); ?>
 
       <label class="required" for="JobTitle_title"><?php echo Yii::t($language,'Title')?> <span class="required">*</span></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'write title') ?></span>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>
  
<div class="da-form-row">
	<?php echo $form->error($model,'from_date_ex'); ?>
	<label for="Staff_birth_date"><?php echo Yii::t($language,'From') ?></label>
	<div class="da-form-item small">
	<span class="formNote"><?php echo Yii::t($language,'from') ?></span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'from_date_ex',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
	</div>
</div>

<div class="da-form-row">
	<?php echo $form->error($model,'to_date_ex'); ?>
	<label for="Staff_birth_date"><?php echo Yii::t($language,'To') ?></label>
	<div class="da-form-item small">
	<span class="formNote"><?php echo Yii::t($language,'to') ?></span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'to_date_ex',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
	</div>
</div>
 


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