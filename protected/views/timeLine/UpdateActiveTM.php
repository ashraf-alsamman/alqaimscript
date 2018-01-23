<?php  include 'lang.php';  ?>
<?php  

$data = TimeLine::model()->findByPk($week_id) ;   

  ?>
  <div class="da-panel">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img alt="" src="images/icons/black/16/pencil.png">
                                        <?php echo Yii::t($language,'Edit') ?>
                                    </span>
                                </div>
     <!-----   	$data->from_date_ex = $_POST['from'];
	$data->to_date_ex = $_POST['to'];       --->                     
                                <div class="da-panel-content">
                                	<form class="da-form">
                                    	
                                	
  <!------------------ date start /--------------------->                   	
  <div class="da-panel">
<div class="da-panel-content">
<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'timeline-form','htmlOptions'=>array('class'=>'da-form'))); ?>

<div class="da-form-inline"><?php	
 $model = new Timeline; ?><div class="da-form-row"> <label><?php echo Yii::t($language,'To') ?></label> 
<div class="da-form-item larg"><span class="formNote"><?php echo Yii::t($language,'To') ?></span>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'from_date_ex','value'=>$data->from_date_ex,
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>'width:90px;'),)); ?>
</div>
<br>
 <label><?php echo Yii::t($language,'To') ?></label> 
<div class="da-form-item larg"><span class="formNote"><?php echo Yii::t($language,'To') ?></span>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'to_date_ex','value'=>$data->to_date_ex,
'options'=>array('showAnim'=>'fold'),'htmlOptions'=>array('style'=>'width:90px;'),)); ?>
</div>

</div><?php $this->endWidget(); ?>
  <!------------------date end    /--------------------->                              	
                                    	
                                    	<div class="da-form-row">
                                        	<label><?php echo Yii::t($language,'Title') ?></label>
                                            <div class="da-form-item large">
                                            	<input id="title" type="text" value="<?php echo $data->title ; ?>">
                                            </div>
                                        </div>



 
                                        <div class="da-button-row">
                                        	
<?php echo CHtml::ajaxLink(Yii::t($language,'Cancel'),  array('CancelActive'), array( 'type'=>'POST','update'=>"#ActiveTimeline",
'data'=>array(  
  'default_lesson_planner_id'=>$data->default_lesson_planner_id
 ),
'beforeSend' => 'function(){ Loading.show();}','complete' => 'function(){ Loading.hide();}',
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button red')); 
 ?>
 &nbsp;&nbsp;                                     	
<?php echo CHtml::ajaxLink(Yii::t($language,'Save'),  array('UpdateActiveTM'), array( 'type'=>'POST','update'=>"#ActiveTimeline",'data'=>array(  
  'title'=>'js:$(\'#title\').val()' ,
  'from_date_ex'=>'js:$(\'#from_date_ex\').val()' ,
  'to_date_ex'=>'js:$(\'#to_date_ex\').val()' ,
  'week_id'=>$data->id
  ,'default_lesson_planner_id'=>$data->default_lesson_planner_id
 ),
'live' =>'false'),array('id' => 'send-link-'.uniqid(),'class'=>'da-button green')); 
 ?>
                                        </div>
                                    </form>
                                </div>
                            </div>