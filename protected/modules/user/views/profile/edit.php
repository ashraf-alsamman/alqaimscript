<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
        UserModule::t("Profile")=>array('profile'),
        UserModule::t("Edit"),
);

?><h2><?php echo UserModule::t('Edit profile'); ?></h2>
<?php
/* @var $this ParentsController */
/* @var $model Parents */
/* @var $form CActiveForm */
?><p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png">Details</span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	'enableAjaxValidation'=>TRUE,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>

 
<div class="da-form-inline">


<?php // echo $form->errorSummary(array($model,$profile)); 
 echo $form->errorSummary($model); 
 ?>

    <div class="da-form-row">    
        <?php echo $form->error($model,'username'); ?>
        <?php echo $form->labelEx($model,'username'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write username</span>
            <?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>
 
    <div class="da-form-row">    
        <?php echo $form->error($model,'email'); ?>
        <?php echo $form->labelEx($model,'email'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write email</span>
            <?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>

<div class="da-button-row" style="float: left">
    	<?php echo CHtml::submitButton($model->isNewRecord ? 'C r e a t e' : 'S a v e',array('class' => 'da-button green large')); ?>
    </div>

<?php $this->endWidget(); ?>

                                        </div>
                                    </form>
                                </div>
                            </div>

</div><!-- form -->

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif;  
  
                $profileFields=$profile->getFields();
                if ($profileFields) {
                        foreach($profileFields as $field) {
                        ?>
        <div class="row">
                <?php echo $form->labelEx($profile,$field->varname);
               
                if ($widgetEdit = $field->widgetEdit($profile)) {
                        echo $widgetEdit;
                } elseif ($field->range) {
                        echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
                } elseif ($field->field_type=="TEXT") {
                        echo $form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
                } 
 
                
                
                else {
                        echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
                }
                echo $form->error($profile,$field->varname); ?>
        </div>  
                        <?php
                        }
                }
 ?>
       
 