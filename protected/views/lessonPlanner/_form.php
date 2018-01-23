<?php  include 'lang.php';  ?>
<p class="note"><?php echo Yii::t($language,'Fields with') ?> <span class="required">*</span><?php echo Yii::t($language,'are required.') ?></p>
<div class="da-panel"><div class="da-panel-header"><span class="da-panel-title">
<img alt="" src="/dashboard/images/icons/black/16/pencil.png"><?php echo Yii::t($language,'Details') ?></span></div>
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
 
       <label class="required" for="Staff_name"><?php echo Yii::t($language,'Title')?> <span class="required">*</span></label>
        <div class="da-form-item large">
        	<span class="formNote"><?php echo Yii::t($language,'write title') ?></span>
            <?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
        </div>
    </div>
 

       <div class="da-form-row">
	    <?php echo $form->error($model,'subject_id'); ?>

	  <label class="required" for="Staff_name"><?php echo Yii::t($language,'Subject')?> <span class="required">*</span></label>
	    <div class="da-form-item default">
	    	<span class="formNote"><?php echo Yii::t($language,'Subject') ?></span>
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
 ?><span style="display: none"><?php
	echo CHtml::dropdownList('LessonPlanner[subject_id]','id',CHtml::listData($data, 'id', 'title' ),array()  ) ;		   	
 ?></span><?php
}
else {
	"You Don`t Have  subject";
}		
 echo $form->error($model,'subject_id'); ?>
	</div></div>



<?php $activeTimeline=   DefaultLessonPlanner::model()->findByAttributes(array('status'=>'1')) ; ?>
       <div class="da-form-row">
	    <?php echo $form->error($model,'default_lesson_planner_id'); ?>
	   <label for="Staff_nationality"><?php echo Yii::t($language,'Timeline') ?></label>
	    <div class="da-form-item default">
	    	<span class="formNote"><?php echo Yii::t($language,'Timeline') ?></span>
 <?php 
 if($model->isNewRecord)
 {
if ($activeTimeline)
{
 	 echo $form->dropDownList($model,'default_lesson_planner_id',
 	  CHtml::listData(DefaultLessonPlanner::model()->findAll(array('order' => 'id')),'id',
 	  'title'),array('options' => array($activeTimeline->id=>array('selected'=>true)),));	
}
else 
{
echo $form->dropDownList($model,'default_lesson_planner_id', CHtml::listData(DefaultLessonPlanner::model()->findAll(array('order' => 'id')),'id','title'));
}

	

 }
 else{
 echo $form->dropDownList($model,'default_lesson_planner_id', CHtml::listData(DefaultLessonPlanner::model()->findAll(array('order' => 'id')),'id','title'));
}
?>
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