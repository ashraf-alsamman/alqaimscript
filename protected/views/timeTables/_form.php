<?php  include 'lang.php';  ?>
<p class="note"><?php echo Yii::t($language,'Fields with') ?> <span class="required">*</span><?php echo Yii::t($language,'are required.') ?></p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png"><?php echo Yii::t($language,'Details') ?></span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'time-tables-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>
<div class="da-form-inline">



	<?php echo $form->errorSummary($model); ?>

    <div class="da-form-row">    
        <?php echo $form->error($model,'title'); ?>
 
       <label class="required" for="Staff_name"><?php echo Yii::t($language,'Title')?> <span class="required">*</span></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'write title') ?></span>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>
    
 
    
   <div class="da-form-row">
	    <?php echo $form->error($model,'lesson_num'); ?>
	    <label for="Staff_active"><?php echo Yii::t($language,'Number of lessons') ?></label>
	    <div class="da-form-item small">
	    	<span class="formNote"><?php echo Yii::t($language,'Number of lessons') ?></span>
		<?php echo $form->dropDownList($model, 'lesson_num', 
		array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10,11=>11)
		//, array('options' => array(8=>array('selected'=>true)))
		
		);
			?>

	    </div>
	</div> 
   
   
<div class="da-form-row">
<label><?php echo Yii::t($language,'Days') ?></label>
<div class="da-form-item">
    <ul class="da-form-list">

<li><input type="checkbox" name="TimeTables[saturday]" id="TimeTables_saturday" <?php if ($model->saturday =='on'){echo 'checked';}?>><label for="TimeTables_saturday" ><?php echo Yii::t($language,'saturday') ?></label></li>
<li><input type="checkbox" name="TimeTables[sunday]" id="TimeTables_sunday" <?php if ($model->sunday == 'on'){echo 'checked';}?>><label for="TimeTables_sunday" ><?php echo Yii::t($language,'sunday') ?></label></li>
<li><input type="checkbox" name="TimeTables[monday]" id="TimeTables_monday" <?php if ($model->monday == 'on'){echo 'checked';}?>><label for="TimeTables_monday" ><?php echo Yii::t($language,'monday') ?></label></li>
<li><input type="checkbox" name="TimeTables[tuesday]" id="TimeTables_tuesday" <?php if ($model->tuesday == 'on'){echo 'checked';}?>><label for="TimeTables_tuesday" ><?php echo Yii::t($language,'tuesday') ?></label></li>
<li><input type="checkbox" name="TimeTables[wednesday]" id="TimeTables_wednesday" <?php if ($model->wednesday == 'on'){echo 'checked';}?>><label for="TimeTables_wednesday" ><?php echo Yii::t($language,'wednesday') ?></label></li>
<li><input type="checkbox" name="TimeTables[thursday]" id="TimeTables_thursday" <?php if ($model->thursday == 'on'){echo 'checked';}?>><label for="TimeTables_thursday" ><?php echo Yii::t($language,'thursday') ?></label></li>
<li><input type="checkbox" name="TimeTables[friday]" id="TimeTables_friday" <?php if ($model->friday == 'on'){echo 'checked';}?>><label for="TimeTables_friday" ><?php echo Yii::t($language,'friday') ?></label></li>

    
    </ul>
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