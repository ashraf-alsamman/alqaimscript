
<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?><br><br><p class="note">Fields with <span class="required">*</span> are required.</p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png">Details</span></div>
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-planner-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('class'=>'da-form')
)); ?>
<div class="da-form-inline">
	
<?php echo $form->errorSummary($model); ?>









    <div class="da-form-row">    
        <?php echo $form->error($model,'title'); ?>
        <?php echo $form->labelEx($model,'title'); ?>
        <div class="da-form-item large">
        	<span class="formNote">write title</span>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>


	<div class="row">
		<?php // echo $form->labelEx($model,'adder_id'); ?>
		<?php //echo $form->textField($model,'adder_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'adder_id'); ?>
	</div>

       <div class="da-form-row">
	    <?php echo $form->error($model,'subject_id'); ?>
	    <?php echo $form->labelEx($model,'subject_id'); ?>
	    <div class="da-form-item default">
	    	<span class="formNote">choose subject</span>
		<?php 
 
        $my_id = Users::model()->findByAttributes(array(
        'id'=>Yii::app()->user->id,'controller_title_ex'=>'Staff'))->user_id ; 
 		
				
 
	   
	    $data = Subjects::model()->findAllBySql("SELECT t.* 
		FROM subjects AS t, staff AS s, teacher_subject AS ts
		WHERE 
		ts.teacher_id = $my_id
		AND ts.subject_id  = t.id
		AND ts.teacher_id  = s.id");
		
		$data2 = Subjects::model()->findBySql("SELECT t.* 
		FROM subjects AS t, staff AS s, teacher_subject AS ts
		WHERE 
		ts.teacher_id = $my_id
		AND ts.subject_id  = t.id
		AND ts.teacher_id  = s.id");

	if (count($data)>1)
{
echo CHtml::dropdownList('LessonPlanner[subject_id]','id',CHtml::listData($data, 'id', 'title' ),array()  ) ;		   	
}
elseif (count($data)==1) {
	echo $data2->title ;
	Yii::app()->session['LessonPlanner_subject_id'] =  $data2->id;
}
else {
	"You Don`t Have subjects subject";
}		
 echo $form->error($model,'subject_id'); ?>
	</div></div>



<div class="da-form-row">
	<?php echo $form->error($model,'lesson_planner_term'); ?>
	<?php echo $form->labelEx($model,'lesson_planner_term')?>
	<div class="da-form-item small">
	<span class="formNote">Pick Term</span>
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'LessonPlanner[lesson_planner_term]',
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>''),)); ?>
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