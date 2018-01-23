<?php
/* @var $this ParentsController */
/* @var $model Parents */
/* @var $form CActiveForm */
?><p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png">Details</span></div>
<div class="da-panel-content">


<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        'enableAjaxValidation'=>true,
        'htmlOptions' => array('enctype'=>'multipart/form-data','class'=>'da-form'),
));
?>
<div class="da-form-inline">





	

<div class="form">
<?php echo $form->errorSummary($model); ?>




        <?php echo $form->errorSummary(array($model,$profile)); ?>



    <div class="da-form-row">    
        <?php echo $form->error($model,'username'); ?>
        <?php echo $form->labelEx($model,'username'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write username</span>
            <?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>

    <div class="da-form-row">    
        <?php echo $form->error($model,'password'); ?>
        <?php echo $form->labelEx($model,'password'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write password</span>
            <?php echo $form->textField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
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

    <div class="da-form-row">    
        <?php echo $form->error($model,'superuser'); ?>
        <?php echo $form->labelEx($model,'superuser'); ?>
        <div class="da-form-item large">
        	<span class="formNote">superuser</span>
           <?php echo $form->dropDownList($model,'superuser',User::itemAlias('AdminStatus')); ?>
        </div>
    </div>


    <div class="da-form-row">    
        <?php echo $form->error($model,'status'); ?>
        <?php echo $form->labelEx($model,'status'); ?>
        <div class="da-form-item large">
        	<span class="formNote">status</span>
                <?php echo $form->dropDownList($model,'status',User::itemAlias('UserStatus'),array(
 'options' => array(1=>array('selected'=>true)),
)  ) ; ?>
        </div>
    </div>


<?php 
                $profileFields=$profile->getFields();
                if ($profileFields) {
                        foreach($profileFields as $field) {
                        ?>
        <div class="row">
                <?php echo $form->labelEx($profile,$field->varname); ?>
                <?php 
                if ($widgetEdit = $field->widgetEdit($profile)) {
                        echo $widgetEdit;
                } elseif ($field->range) {
                        echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
                } elseif ($field->field_type=="TEXT") {
                        echo CHtml::activeTextArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
                } else {
                        echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
                }
                 ?>
                <?php echo $form->error($profile,$field->varname); ?>
        </div>
                        <?php
                        }
                }
?>
<div class="da-button-row" style="float: left">
    	<?php echo CHtml::submitButton($model->isNewRecord ? 'C r e a t e' : 'S a v e',array('class' => 'da-button green large')); ?>
    </div>

<?php $this->endWidget(); ?>

                                        </div>
                                    </form>
                                </div>
                            </div>

</div><!-- form -->
