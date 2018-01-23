<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");

?>

<h2><?php echo UserModule::t("Change password"); ?></h2>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png">Details</span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	 'id'=>'changepassword-form',
	  'enableAjaxValidation'=>true,
    'htmlOptions'=>array('class'=>'da-form'),
	        'clientOptions'=>array(
                'validateOnSubmit'=>true,),
        
)); 
  ?>


 


<div class="da-form-inline">





	<?php echo $form->errorSummary($model); ?>

    <div class="da-form-row">    
        <?php echo $form->error($model,'password'); ?>
        <?php echo $form->labelEx($model,'password'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write new Password</span>
            <?php echo $form->textField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
        </div>
             <p class="hint">
        <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
        </p>
    </div>

    <div class="da-form-row">    
        <?php echo $form->error($model,'verifyPassword'); ?>
        <?php echo $form->labelEx($model,'verifyPassword'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write new Password again</span>
            <?php echo $form->textField($model,'verifyPassword',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>


 




<div class="da-button-row" style="float: left">
    	<?php echo CHtml::submitButton( 'S a v e',array('class' => 'da-button green large')); ?>
    </div>

<?php $this->endWidget(); ?>

                                        </div>
                                    </form>
                                </div>
                            </div>

</div><!-- form -->
